<?php
   $page = "dash";
   include 'static/head.php';
   
   $dbh = new PDO('mysql:host=localhost;dbname=comicly','root');
   
   $s = $dbh->query("SELECT * FROM `users` WHERE user_name = '".$_GET['username']."'");
   $user = $s->fetchAll();
   
   $c = $dbh->query("SELECT * FROM `comics` WHERE user_name = '".$_GET['username']."'");
   $comics = $c->fetchAll();
?>

<div class="container">
    <div class="row">
        <?php
			if($user == null){ // This is where things get messy
				echo "<h1>User not found! <small>Did you type something wrong?</small></h1>";
			}else{
                echo'
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="'.$user[0]['userimg'].'" alt="placeholder">
				<div class="caption">
					<h3>'.$user[0]['user_name'];
					if ($user[0]['user_isStaff'] == true){
						echo ' <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>';
					}
					echo '</h3>
					<p>'.$user[0]['user_desc'].'</p>			
				</div>
			</div>
            </div>				
                '; 
			}
		?>
		<?php
		for($i = 0; $i < sizeof($comics); $i++){
		echo '<div class="col-md-3">
			<div class="thumbnail">
				<img src="/comic.ly/'.$comics[$i]['location'].'" alt="placeholder">
				<div class="caption">
					<h3>'.$comics[$i]['name'].'</h3>
					<p>'.$comics[$i]['description'].'</p>
					<p><a href="/comic.ly/view/'.$comics[$i]['id'].'" class="btn btn-primary" role="button">Read</a></p>
				</div>
			</div>					
		</div>';
		}
		?>
	</div>
</div>

<?php
   include 'static/foot.php'
?>