package com.demo.user;

import com.demo.blog.Blog;
import com.demo.util.StringUtil;
import com.jfinal.aop.Before;
import com.jfinal.core.Controller;

/**
* @author liuxiangfei
* @version Time：2015年11月9日 下午2:33:37
*/
@Before(UserInterceptor.class)
public class UserController extends Controller{
	public void index() {
		setAttr("userPage", User.me.paginate(getParaToInt(0, 1), 5));
		render("user.jsp");
	}
	public void editView(){
		String userId = getPara("userId");
		if(!StringUtil.isEmpty(userId)){
			setAttr("user", User.me.findById(userId));
			setAttr("url","updateUser");
		}else{
			setAttr("user",new User());
			setAttr("url","saveUser");
		}
		render("edit.jsp");
	}
	public void delete(){
		User.me.findById(getPara("userId")).set("enabled", "0").update();
		redirect("/user");
	}
	public void updateUser(){
		User user = getModel(User.class);
		user.set("userId",((String)user.get("userId")).toUpperCase()).set("enabled", "1").update();
		redirect("/user");
	}
	public void saveUser(){
		User user = getModel(User.class);
		user.set("userId",((String)user.get("userId")).toUpperCase()).set("enabled", "1");
		User userT = User.me.findById(user.get("userId"));
		if(userT!=null){
			if("0".equals(userT.get("enabled"))){
				user.update();
			}else{
				setAttr("msg", "账号已经存在");
				render("edit.jsp");
			}
		}else{
			user.save();
		}
		
		redirect("/user");
	}
}
