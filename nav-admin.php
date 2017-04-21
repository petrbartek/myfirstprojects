<!doctype html>
<!--The code have been used from "Practical PHP and MySQL Website Database A Simplified Aproach" book form Adrian W. West -->
<html lang=en>
<head>
<title>The Login page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
</head>
<body>
<div id="container">
<?php include("login-header.php"); ?>
<?php include("info-col.php"); ?>

<!-- Start of the login page content. -->
		<ul>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="admin_view_users.php">View Members</a></li>
			<li><a href="search_addresses.php">Addresses</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="register-password.php">New Password</a></li>
		</ul>
	</div>
</div>	
</body>
</html>