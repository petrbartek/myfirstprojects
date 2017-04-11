<?php
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
<title>Admin page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">
#midcol { width:98%; }
#midcol p { margin-left:auto; }
</style>
</head>
<body>
<div id="container">
<?php include("adminheader.php"); ?>
<?php include("info-col.php"); ?>
	<div id="content"><!-- Start of the member's page content. -->
<?php
echo '<h2>Welcome to the Admin Page ';
if (isset($_SESSION['fname'])){
echo "{$_SESSION['fname']}";
}
echo '</h2>';
?>
<div id="midcol">
	<h3>You have permission to:</h3><p>&#9632;Edit and delete a record.</p>
	<p>&#9632;Use the View members button to page through all the members.</p>
	<p>&#9632;Use the Search button to locate a particular member</p>
	<p>&#9632;Use the Addresses button to locate a member's Address and Phone 
	number </p>
	<p>&nbsp;</p></div>
<!-- End of the members page content. -->
</div></div>	
	<div id="footer">
		<p style="position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;">Copyright &copy; Petr Bartek | Designed by <a href="http://www.google..co.uk/">Petr Bartek</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; 
		<a href="http://validator.w3.org/">HTML5</a></p>
	</div>
</body>
</html>