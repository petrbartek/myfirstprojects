<!--upload code used from http://www.tutorialspoint.com/php/php_file_uploading.htm-->
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
<!--Partial code used form "Practical PHP and MySQL Website Databeses; A Simplified Approach" BOOK  -->
<html lang="en">

<head>
<title>File upload</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="includes.css">
</head>
<body>
<div id="container">
<?php include("adminheader.php"); ?>
<?php include("admin-nav.php"); ?>

	<div id="content"><!-- code used form https://www.w3schools.com/php/php_file_upload.asp-->
	<h2>Upload</h2>
	
	<form action="upload-admin.php" method="post" enctype="multipart/form-data">
    Select a file to upload:
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload" name="submit">
</form

	</div>
</div>	
	<div id="footer">
		<p style="position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;">Copyright &copy; Petr Bartek | Designed by <a href="http://www.goole.co.uk/">Petr Bartek</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; 
		<a href="http://validator.w3.org/">HTML5</a></p>
	</div>
</body>
</html>	  
