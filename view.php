<?php
   $page = "dash";
   include 'static/head.php';

   $dbh = new PDO('mysql:host=localhost;dbname=comicly','root');

   $s = $dbh->query("SELECT * FROM `comics` WHERE id = '".$_GET['id']."'");
   $comic = $s->fetchAll();
?>

<div class="container">
    <div class="row">
        <?php
            echo "<h2>".$comic[0]['name']." <small>by ".$comic[0]['user_name']."</small></h2>";
            echo "<img src='/comic.ly/".$comic[0]['location']."' class='img-responsive' alt='".$comic[0]['name']."'>";
            // debug print_r($comic);
        ?>
    </div>
</div>

<?php
   include 'static/foot.php'
?>
