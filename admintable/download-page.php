<!doctype html>
<!--Code used form "Practical PHP and MySQL Website Databeses; A Simplified Approach" BOOK  -->
<html lang="en">
<head>
<title>Download-Page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
</head>
<body>
	

<div id="container">
<?php include("students-header.php"); ?>
<?php include("nav.php"); ?>
<?php include("info-col.php"); ?>
	<div id="content"><!-- Start of the page-specific content. -->
<h2>This is download page </h2>
<a href="download.php?file=picture.jpg">Download file</a>
<p>This is download page<br></p>
	<!-- End of the page-specific content. --></div>
</div>	
	<div id="footer">
		<p style="position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;">Copyright &copy; Petr Bartek | Designed by <a href="http://www.google.co.uk/">Petr Bartek</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; 
		<a href="http://validator.w3.org/">HTML5</a></p>
	</div>
</body>
</html>