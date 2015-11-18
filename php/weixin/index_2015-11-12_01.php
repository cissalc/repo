<?php
include 'memcached.php';
$token = get_memcached_token();
$ip_access_url = 'https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=' . $token;
$res = file_get_contents($ip_access_url); //获取文件内容或获取网络请求的内容
$result = json_decode($res, true); //接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
var_dump($result);

?>