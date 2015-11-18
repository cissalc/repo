package com.demo.user;

import com.jfinal.aop.Interceptor;
import com.jfinal.aop.Invocation;

/**
* @author liuxiangfei
* @version Time：2015年11月9日 下午2:34:29
*/
public class UserInterceptor  implements Interceptor {

	@Override
	public void intercept(Invocation inv) {
		System.out.println("Before invoking " + inv.getActionKey());
		inv.invoke();
		System.out.println("After invoking " + inv.getActionKey());
	}

}
