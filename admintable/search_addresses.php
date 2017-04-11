<!doctype html>
<html lang=en>
<head>
<title>Search page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">

h3.red { color:red; font-size:105%; font-weight:bold; text-align:center;}
</style>
</head>
<body>
<div id="container">
<?php include("adminheader.php"); ?>
<?php include("info-col.php"); ?>
	<div id="content"><!-- Start of search address page content. -->
<h2>Search for an Address or Phone Number</h2>
<h3 class="red">Both Names are required items</h3>
<form action="view_found_address.php" method="post">
	<p><label class="label" for="fname">First Name:</label><input id="fname" type="text" name="fname" size="30" maxlength="30" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>"></p>
	<p><label class="label" for="lname">Last Name:</label><input id="lname" type="text" name="lname" size="30" maxlength="40" value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>"></p>
	<p><input id="submit" type="submit" name="submit" value="Search"></p>
</form>
<div id="footer">
		<p style="position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;">Copyright &copy; Petr Bartek | Designed by <a href="http://www.google..co.uk/">Petr Bartek</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; 
		<a href="http://validator.w3.org/">HTML5</a></p>
	</div>
</div><!-- End of the search address page content. -->
</div>	
</body>
</html>