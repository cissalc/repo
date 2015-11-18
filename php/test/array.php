<?php
 function  test_global ()
{
     // 大多数的预定义变量并不 "super"，它们需要用 'global' 关键字来使它们在函数的本地区域中有效。
     global  $HTTP_POST_VARS ;

    echo  $HTTP_POST_VARS [ 'name' ];

     // Superglobals 在任何范围内都有效，它们并不需要 'global' 声明。Superglobals 是在 PHP 4.1.0 引入的。
     echo  $_POST [ 'name' ];
}
test_global();
 ?> 