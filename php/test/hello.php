<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <?php  echo  '<p>Hello World</p>' ;  
		echo  $_SERVER [ 'HTTP_USER_AGENT' ]; 
		echo  '<br>';
		if ( strpos ( $_SERVER [ 'HTTP_USER_AGENT' ],  'Chrome' ) !==  FALSE ) {
			echo  '正在使用 Chrome。<br />' ;
		}
 ?>
 
 </body>
</html> 