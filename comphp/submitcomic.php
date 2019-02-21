<?php
$dbh = new PDO('mysql:host=localhost;dbname=comicly','root');
$target_dir = "../../comic.ly/comimgs/";
$target_file = $target_dir . basename($_FILES["cfile"]["name"]);
$uploadOk = 1;
$fileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $name = $_POST['cname'];
    $desc = $_POST['cdesc'];
    $keys = $_POST['ckeys'];
    $userid = $_POST['uid'];
    $usern = $_POST['uname'];
    if ($fileType != "zip" && $fileType = !"png") {
        echo "Only .zip or .png files are allowed";
        $uploadOk = 0;
    } else {
        $uploadOk = 1;
    }
    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["cfile"]["tmp_name"], $target_file)) {
            
            $dbh->query("INSERT INTO `comics` (name, user_id, user_name, location, description, keywords) VALUES ('".$name."','".$userid."','".$usern."','".$target_file."','".$desc."','".$keys."')");
            
            echo "The file " . basename($_FILES["cfile"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>