<?php if(!defined("ROOTPATH")){die("Access forbidden.".PHP_EOL);}
return array(
	'auth_url' => 'http://localhost:8002/api/method/login',
	'api_url' => 'http://localhost:8002/api/resource/',
	'auth' => array('usr' => 'Administrator', 'pwd' => '123456'),
	'cookie_file' => __DIR__.'/cookie.txt',
	'curl_timeout' => 30,

	'basic_auth' => array(),
	// 'basic_auth' => array('usr' => 'Administrator', 'pwd' => '123456'),

);
//