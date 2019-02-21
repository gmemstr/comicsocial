<?php
	$page = "index";
	include "static/head.php";
?>
<div class="jumbotron">
	<div class="container">
		<h1>Comix Club <small>Comics Gone Social</small></h1>
		<p>Write your own series, subscribe to those you love, hear the voice of your fans.</p>
		<button type="button" class="btn btn-primary btn-lg">Learn more</button>
	</div>
</div>

<div class="container">
	<div class="page-header">
		<h1>Featured comics <small>Based on votes.</small></h1>
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
					<p><a href="#" class="btn btn-primary" role="button">Read</a></p>
				</div>
			</div>
		</div>';
		}
		?>
	</div>
	<div class="page-header">
		<h1>Smaller users <small>Based on who needs more exsposure.</small></h1>
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
					<p><a href="#" class="btn btn-primary" role="button">Read</a></p>
				</div>
			</div>
		</div>';
		}
		?>
	</div>
</div>

<?php
	include "static/foot.php";
?>
