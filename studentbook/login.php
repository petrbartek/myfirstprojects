<!--The code have been used from "Practical PHP and MySQL Website Database A Simplified Aproach" book form Adrian W. West -->
<!doctype html>
<html lang=en>
<head>
<title>The Login page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">
#header { 	margin:10px auto 0 auto; min-width:960px; max-width:1200px; height:175px; background-image: url('images/granit.jpg'); 
background-repeat: repeat; padding:0; color:white;	
}
h1 {position:relative; top:40px; font-size:350%; color:white; margin:auto 0 auto 20px; 	width: 487px;
}
#reg-navigation ul { float:right;
	font-size:medium; width:160px; margin:-150px 15px 0 88%;
</style>
</head>
<body>
<div id="container">
<?php include("login-header.php"); ?>
<div id="content"><!-- Start of the login page content. -->
<?php 
// This section processes submissions from the login form.
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//connect to database
	require ('mysqli_connect.php');
	// Validate the email address:
	if (!empty($_POST['email'])) {
			$e = mysqli_real_escape_string($dbcon, $_POST['email']);
	} else {
	$e = FALSE;
		echo '<p class="error">You forgot to enter your email address.</p>';
	}
	// Validate the password:
	if (!empty($_POST['psword'])) {
			$p = mysqli_real_escape_string($dbcon, $_POST['psword']);
	} else {
	$p = FALSE;
		echo '<p class="error">You forgot to enter your password.</p>';
	}
	if ($e && $p){//if no problems
// Retrieve the user_id, first_name and user_level for that email/password combination:
		$q = "SELECT user_id, fname, user_level FROM users WHERE (email='$e' AND psword=SHA1('$p'))";		
		$result = mysqli_query ($dbcon, $q); 
		// Check the result:
		if (@mysqli_num_rows($result) == 1) {//The user input matched the database record
		// Start the session, fetch the record and insert the three values in an array
		session_start();
		$_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$_SESSION['user_level'] = (int) $_SESSION['user_level']; // Changes the 1 or 2 user level to an integer.
$url = ($_SESSION['user_level'] === 1) ? 'admin-page.php' : 'students-page.php'; // Ternary operation to set the URL
header('Location: ' . $url); // Makes the actual page jump. Keep in mind that $url is a relative path.
exit(); // Cancels the rest of the script.
	mysqli_free_result($result);
	mysqli_close($dbcon);
	ob_end_clean(); // Delete the buffer.
	} else { // No match was made.
	echo '<p class="error">The email address and password entered do not match our records.<br>Perhaps you need to register, click the Register button on the header menu</p>';
	}
	} else { // If there was a problem.
		echo '<p class="error">Please try again.</p>';
	}
	mysqli_close($dbcon);
	} // End of SUBMIT conditional.
?>
<!-- Display the form fields-->
<div id="loginfields">
<?php include ('login_page.inc.php'); ?>
</div><br>
<div id="footer">
		<p style="position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;">Copyright &copy; Petr Bartek | Designed by <a href="http://www.google..co.uk/">Petr Bartek</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; 
		<a href="http://validator.w3.org/">HTML5</a></p>
	</div>
</div>
</div>	
</body>
</html>
