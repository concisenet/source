<?php
	define('APP_NAME','home');
	define('APP_PATH','./home/');
	define('THINK_PATH','./ThinkPHP/');
	define('RUNTIME_PATH',APP_PATH.'runtime/');
	define('BUILD_DIR_SECURE',true);
	define('DIR_SECURE_FILENAME','index.html');
	define('DIR_SECURE_CONTENT','Access Denied');
	include THINK_PATH.'ThinkPHP.php';

?>