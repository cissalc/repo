<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['foodClass/(:any)'] = "foodClass/index/$1";
$route['weixin/weixin_index'] = "weixin/weixin_index";
$route['weixin'] = "weixin";

$route['user/updateUser'] = 'user/updateUser';
$route['user/updateUserView'] = 'user/updateUserView';
$route['user/updateUserListView'] = 'user/updateUserListView';
$route['user/deleteUser'] = 'user/deleteUser';
$route['user/deleteUserView'] = 'user/deleteUserView';
$route['user/addUserView'] = 'user/addUserView';
$route['user/listUser'] = 'user/listUser';
$route['user/(:any)'] = 'user/index/$1';
$route['user'] = 'user';

$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['default_controller'] = 'weixin/index';
$route['(:any)'] = 'weixin/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
