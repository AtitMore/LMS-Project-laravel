<?php
	require_once 'messages.php';

	define('BASE_PATH', 'http://localhost/EverGalax/');
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'EverGalax');

	function_autoload($class)
	{
		$parts=explode('_', $class);
		$path=implode(DIRECTORY_SEPERATOR, $parts);
		require_once $path.'.php';
	}
		
?>