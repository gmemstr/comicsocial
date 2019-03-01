<?php
   /*
      This is the header file. It takes care of the navbar
      and various other things that need to be at the top
      of the HTML file.
   */

   require __DIR__.'../../userapp/lib/UserApp/Autoloader.php';
   require __DIR__.'../../userapp/lib/UserApp/Widget/Autoloader.php';

   UserApp\Autoloader::register();
   UserApp\Widget\Autoloader::register();

   use \UserApp\Widget\User;

   User::setAppId("<userapp id>"); // It also handles user authentication

   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="Comic.ly | Comics gone social">
      <meta name="author" content="Gabriel Simmer">
      <link rel="icon" href="fav.ico">
      <title>Comix Club | Comics gone social</title>
      <!-- Bootstrap core CSS -->
      <link href="/css/bootstrap.min.css" rel="stylesheet">
      <link href="/css/custom.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- Login modal -->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Login</h4>
               </div>
               <div class="modal-body">
                  <form action="/userauth/login.php" method="post">
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="u">
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="p">
                     </div>
                     <button type="submit" class="btn btn-default">Login</button>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-inverse navbar-static-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Comic.ly</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li <?php
                     if($page == "index"){
                           echo 'class="active"';
                     }
                     ?>><a href="/">Home</a></li>
                  <li><a href="#">Browse</a></li>
                  <li <?php
                     if($page == "about"){
                           echo 'class="active"';
                     }
                     ?>><a href="/about/">About</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <?php
                     try{
                     if(!User::authenticated()){
                           echo '<li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                     <li><a href="#">Register</a></li>';
                     }else{
                           $user = User::current();
                           echo '<li><p class="navbar-text">Welcome '.$user->first_name.'</p></li>';
                           echo '<li><p class="navbar-text"><a href="/dashboard/">Dashboard</a></p></li>';
                           if($user->hasFeature("gold")){

                           }else{
                           echo '<li><p class="navbar-text donate-text"><a href="/donate/">Donate</a></p></li>';
                          }
                           echo '<li><p class="navbar-text"><a href="/userauth/logout.php">Logout</a></p></li>';
                     }
                     }catch(Exception $e){
                           echo '<li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                     <li><a href="#">Register</a></li>';
                           User::current()->logout();
                     }
                     ?>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
         <!--/.container-fluid -->
      </nav>
