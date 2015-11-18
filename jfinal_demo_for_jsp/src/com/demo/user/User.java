package com.demo.user;

import com.demo.blog.Blog;
import com.jfinal.plugin.activerecord.Model;
import com.jfinal.plugin.activerecord.Page;

/**
* @author liuxiangfei
* @version Time：2015年11月9日 下午2:27:52
* 
mysql> desc t_user;
+-------------+--------------+------+-----+---------+-------+
| Field       | Type         | Null | Key | Default | Extra |
+-------------+--------------+------+-----+---------+-------+
| userId      | varchar(20)  | NO   |     | NULL    |       |
| userName    | varchar(200) | YES  |     | NULL    |       |
| enabled     | varchar(200) | YES  |     | NULL    |       |
| passWord    | varchar(200) | YES  |     | NULL    |       |
| deptCode    | varchar(200) | YES  |     | NULL    |       |
| deptName    | varchar(200) | YES  |     | NULL    |       |
| posCode     | varchar(200) | YES  |     | NULL    |       |
| posName     | varchar(200) | YES  |     | NULL    |       |
| mobilePhone | varchar(200) | YES  |     | NULL    |       |
| email       | varchar(200) | YES  |     | NULL    |       |
+-------------+--------------+------+-----+---------+-------+
数据库字段名建议使用驼峰命名规则，便于与 java 代码保持一致，如字段名： userId
*/
public class User extends Model<User>{
	private static final long serialVersionUID = 7263891661903685981L;
	public static final User me = new User();
	public Page<User> paginate(int pageNumber, int pageSize) {
		return paginate(pageNumber, pageSize, "select *", "from t_user where enabled=1 ");
	}
}
