<?php
include 'memcached.php';
include 'util.php';
$token = get_memcached_token();

echo $token;
$menu = array();


$menu['button'][0] = array(
	'type' => 'view',
	'name' => '点餐',
	'url' => site_url('/weixin/order/index'),
);
$json = json_encode($menu, JSON_UNESCAPED_UNICODE);
$url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=' . $token;
var_dump(post($url, $json));
?>




