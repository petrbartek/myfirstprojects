<?php
//The code have been used from "Practical PHP and MySQL Website Database A Simplified Aproach" book form Adrian W. West
//set the session data
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0))
{  header("Location: login.php");
   exit();
}
?>
<!doctype html>
<html lang=en>
<head>
<title>Student page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
</head>
<body>
<div id="container">
<?php include("students-header.php"); ?>
<?php include("nav.php"); ?>
	<div id="content"><!-- Start of the student's page content. -->
<?php
echo '<h2>Welcome ';
if (isset($_SESSION['fname'])){
echo "{$_SESSION['fname']}";
}
echo '</h2>';
?>
<div id="midcol">
<div id="mid-left-col">
<h3>Student's Events</h3>
<p>The student page content.</p></div>
<div id="mid-right-col">
<h3>Special notification for students only.</h3>

<br>
</div>
</div></div><!-- End of the members page content. -->
</div>	
	<div id="footer">
		<p style="position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;">Copyright &copy; Petr Bartek | Designed by <a href="http://www.google..co.uk/">Petr Bartek</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; 
		<a href="http://validator.w3.org/">HTML5</a></p>
	</div>
	</div>
</body>
</html>