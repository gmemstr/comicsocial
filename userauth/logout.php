<?php
	require __DIR__.'../../userapp/lib/UserApp/Autoloader.php';
	require __DIR__.'../../userapp/lib/UserApp/Widget/Autoloader.php';  
  
	UserApp\Autoloader::register();
	UserApp\Widget\Autoloader::register();
  
	use \UserApp\Widget\User;
  
	User::setAppId("<userapp id>");
	
	User::current()->logout();
	
	header('Locatin /');
?>
