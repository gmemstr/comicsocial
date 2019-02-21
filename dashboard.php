<?php
   $page = "dash";
   include 'static/head.php'
   ?>
<div class="container">
   <div class="page-header">
      <h1>Your comics <a class="btn btn-success" href="#" role="button">Create new <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span></a>
         <a class="btn btn-info" href="#" role="button">Analytics <span class="glyphicon glyphicon-stats" aria-hidden="true"></span></a>
      </h1>
   </div>
   <div class="row">
      <?php
         for($i = 0; $i < 4; $i++){
         echo '<div class="col-md-3">
         	<div class="thumbnail">
         		<img src="http://placehold.it/1280x720" alt="placeholder">
         		<div class="caption">
         			<h3>Title</h3>
         			<p>Description (possibly going to be optional)</p>
         			<div class="btn-group">
         					<div class="btn-group">
         						<a href="#" class="btn btn-default" role="button">Edit</a>
         					</div>
         					<div class="btn-group">
         						<a href="#" class="btn btn-default" role="button">View</a>
         					</div>
         				</div>
         		</div>
         	</div>					
         </div>';
         }
         ?>
   </div>
   <div class="page-header">
      <h1>Your series <a class="btn btn-success" href="#" role="button">Create new <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span></a>
      </h1>
   </div>
   <div class="row">
      <?php
         for($i = 0; $i < 4; $i++){
         echo '<div class="col-md-3">
         	<div class="thumbnail">
         		<img src="http://placehold.it/1280x720" alt="placeholder">
         		<div class="caption">
         			<h3>Title</h3>
         			<p>Description (possibly going to be optional)</p>
         			<div class="btn-group">
         					<div class="btn-group">
         						<a href="#" class="btn btn-default" role="button">Edit</a>
         					</div>
         					<div class="btn-group">
         						<a href="#" class="btn btn-default" role="button">View</a>
         					</div>
         				</div>
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