<?php
define('APPID','wx4475786bff6efc4b');
define('APPSECRET','a0bdf335310364c18fbb4d06735d329f');
function get_memcached_token(){
		
	$token_file_name = 'token.txt';
	$time_set = 7000;
	
	$token = '';
	if(exists_token()){
		if(!exprise_token()){
			$token = file_get_contents($token_file_name);
		}else{
			unlink($token_file_name);
			$token = get_token();
			file_put_contents($token_file_name,$token);
		}
	}else{
		$token = get_token();
		file_put_contents($token_file_name,$token);
	}
	return $token;
}

/*判断文件是否存在*/
function exists_token(){
	global $token_file_name; 
	if(file_exists($token_file_name)){
		return true;
	}else{
		return false;
	}
}
/*token是否失效*/
function exprise_token(){
	global $token_file_name, $time_set; 
	$ctime = filectime($token_file_name);
	$now = time();
	$var1 =  $now - $ctime;
	$token = '';
	if($var1 >= $time_set){
		return true;
	}else{
		return false;
	}
}

function get_token(){
	$token_access_url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . APPID . "&secret=" . APPSECRET;
	$res = file_get_contents($token_access_url); //获取文件内容或获取网络请求的内容
	//echo $res;
	$result = json_decode($res, true); //接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
	$access_token = $result['access_token'];
	return $access_token;
}


?>
