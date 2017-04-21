<!--The code have been used from "Practical PHP and MySQL Website Database A Simplified Aproach" book form Adrian W. West -->
<style type="text/css">
#header { 	margin:10px auto 0 auto; min-width:960px; max-width:1200px; height:175px; background-image: url('images/granit.jpg'); 
background-repeat: repeat; padding:0; color:white;	
}
h1 {position:relative; top:40px; font-size:350%; color:white; margin:auto 0 auto 20px; 	width: 487px;
}
#reg-navigation ul { float:right;
	font-size:medium; width:160px; margin:-150px 15px 0 88%;
</style>
<?php
//<!--Code used form "Practical PHP and MySQL Website Databeses; A Simplified Approach" BOOK  -->
											
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1))
{
header("Location: login.php");
exit();
}
?>
<!doctype html>
<html lang=en>
<head>
<title>Admin view users page for an administrator</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">
p { text-align:center; 
}
</style>
</head>
<body>
<div id="container">
<?php include("adminheader.php"); ?>
<?php include("admin-nav.php"); ?>
<div id="content"><!-- Start of table display page content of  -->
<h2>Upload Unsuccessful</h2>
<p>
<?php
//https://www.w3schools.com/php/php_file_upload.asp
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file is a actual file or fake file
//NOT WORKING!!!!
//if(isset($_POST["submit"])) {
  //  $check = gettype($_FILES["file"]["tmp_name"]);
    //if($check !== false) {
      //  echo "File is OK - " . $check["mime"] . ".";
        //$uploadOk = 1;
   // } else {
     //   echo "File is not OK.";
       // $uploadOk = 0;
   // }
//}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is exceeds 60MB, ";
    $uploadOk = 0;
}
// Allow certain file formats
if($FileType != "jpg" && $FileType != "txt" && $FileType != "png" && $FileType != "jpeg"
&& $FileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, TXT, PNG & GIF files are allowed,";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>