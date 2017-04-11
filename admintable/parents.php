<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 2))
{
   header("Location: login.php");
   exit();
}
?>
<!doctype html>
<html lang=en>
<head>
<title>Parents page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">
#midcol { width:98%; }
#midcol p { margin-left:auto; }
</style>
</head>
<body>
<div id="container">
<?php include("header-admin.php"); ?>
<?php include("info-col.php"); ?>
	<div id="content"><!-- Start of the member's page content. -->
<?php
echo '<h2>parents page ';
if (isset($_SESSION['fname'])){
echo "{$_SESSION['fname']}";
}
echo '</h2>';
?>
<div id="midcol">
	<h3>Here you can see grades of your kids</h3><p>
	
	
	<p>&nbsp;</p></div>
<!-- End of the members page content. -->
</div></div>	
	<div id="footer">
		<?php include("footer.php"); ?>
	</div>
</body>
</html>