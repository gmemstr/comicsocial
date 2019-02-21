<?php
	require __DIR__.'../../userapp/lib/UserApp/Autoloader.php';
	require __DIR__.'../../userapp/lib/UserApp/Widget/Autoloader.php';  
  
	UserApp\Autoloader::register();
	UserApp\Widget\Autoloader::register();
  
	use \UserApp\Widget\User;
  
	User::setAppId("<userapp id>");
	
	$uname = $_POST['u'];
	$p = $_POST['p'];
	
	if(User::login($uname, $p)){
		header('Location: /comic.ly/');
	}else{
		//echo $uname . " " . $p;
		//header('Location: ../login.php');
	}
?>
