package com.demo.util;
/**
* @author liuxiangfei
* @version Time：2015年11月9日 下午4:49:26
*/
public class StringUtil {
	public static boolean isEmpty(String str){
		boolean result = true;
		if(str!=null && !"".equals(str)){
			result = false;
		}
		return result;
	}

}
