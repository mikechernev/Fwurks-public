<?php

final class Session_Config
{
	public static $adapter = 'Standart';
	
	public static $cache_expire = 30;
	public static $name = 'FrameWorkSession';
	
	public static $cookie = array
	(
		'lifetime' 	=> 0,
	    'path' 		=> '/',
	    'domain' 	=> null,
	    'secure' 	=> null,
	    'httponly' 	=> null
	);
}

?>
