<?php

// literal
// key:variable
// :variable
// :?optional
// :variable~regexp~
// :?optional~regexp~

/**
 * Routes Map
 */
class Routes_Config 
{
	public $custom	= ['alabala/:controller/qqq/:action/:?ddd~\d{4}-\d{4}~'		, ['action' => 'asd_{action}_{controller}']];
	
	public $e404	= ['404'	 												, ['controller' => 'home', 'action' => '404']];
	public $default	= [':?controller/:?action/:?id'	 							, ['controller' => 'home', 'action' => 'index']];
}

?>
