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
<?php include("students-header.php"); ?>
<?php include("nav.php"); ?>
<?php include("info-col.php"); ?>

	<div id="content"><!-- code used form https://www.w3schools.com/php/php_file_upload.asp-->
	<h2>Upload</h2>
	
	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
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