<?php
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
<?php include("member-header.php"); ?>
<?php include("nav.php"); ?>
<?php include("info-col.php"); ?>
	<div id="content"><!-- Start of the member's page content. -->
<?php
echo '<h2>Welcome student page ';
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
<h3>Special offers to members only.</h3>

<img alt="Polo shirt" title="Polo shirt" height="207" src="images/polo.png" width="280"><br>
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