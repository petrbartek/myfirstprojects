<!doctype html>
<html lang="en">
<head>
<title>Register page</title>
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
<?php include("register-header.php"); ?>
<?php include("info-col.php"); ?>
	<div id="content"><!-- Start of the register page content -->
<p><?php
require ('mysqli_connect.php'); // Connect to the database.
// If the form has been submitted, insert a record in the users table
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array
	// Check for a first name:
	if (empty($_POST['fname'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		//$fn = trim($_POST['fname']);
			$fn = mysqli_real_escape_string($link, trim($_POST['fname']));
	}
	// Check for a last name:
	if (empty($_POST['lname'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		//$ln = trim($_POST['lname']);
		//$ln = mysqli_real_escape_string($link, $ln);
		$ln = mysqli_real_escape_string($link, trim($_POST['lname']));
	}
	// Check for an email address
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = trim($_POST['email']);
	}
	// Check for a password then match it against the confirmed password:
	if (!empty($_POST['psword1'])) {
		if ($_POST['psword1'] != $_POST['psword2']) {
			$errors[] = 'Your two password did not match.';
		} else {
			$p = mysqli_real_escape_string($link, trim($_POST['psword1']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	if (empty($errors)) { // If everything's OK
	// Register the user in the database...
		// Make the query:
		$q = "INSERT INTO users (user_id, fname, lname, email, psword, registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), ".date('Y-m-d')." )";		
		$result = @mysqli_query ($link, $q); // Run the query.
		if ($result) { // If it ran OK
		header ("location: register-thanks.php"); 
		exit();
		// Echo a message:
		//echo '<h2>Thank you!</h2>
		//<p>You are now registered.</p><p><br></p>';	
		} else { // If it did not run OK
		// Error message:
			echo '<h2>System Error</h2>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			// Debugging message:
			echo '<p>' . mysqli_error($link) . '<br><br>Query: ' . $q . '</p>';
		} // End of if ($result)
		mysqli_close($link); // Close the database connection.
		// Include the footer and stop the script
		include ('footer.php'); 
		//header ("location: register-thanks.php"); 
		//exit();
	} else { // Report the errors
		echo '<h2>Error!</h2>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Echo each error
			echo " - $msg<br>\n";
		}
		echo '</p><h3>Please try again.</h3><p><br></p>';
		}// End of if (empty($errors))
} // End of the main Submit conditional
?>
<h2>Register</h2>
<form action="register-page.php" method="post">
	<p><label class="label" for="fname">First Name:</label><input id="fname" type="text" name="fname" size="30" maxlength="30" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>"></p>
	<p><label class="label" for="lname">Last Name:</label><input id="lname" type="text" name="lname" size="30" maxlength="40" value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>"></p>
	<p><label class="label" for="email">Email Address:</label><input id="email" type="text" name="email" size="30" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
	<p><label class="label" for="psword1">Password:</label><input id="psword1" type="password" name="psword1" size="12" maxlength="12" value="<?php if (isset($_POST['psword1'])) echo $_POST['psword1']; ?>" >&nbsp;Between 8 and 12 characters.</p>
	<p><label class="label" for="psword2">Confirm Password:</label><input id="psword2" type="password" name="psword2" size="12" maxlength="12" value="<?php if (isset($_POST['psword2'])) echo $_POST['psword2']; ?>" ></p>
	<p><input id="submit" type="submit" name="submit" value="Register"></p>
</form>
<div id="footer">
		<p style="position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;">Copyright &copy; Petr Bartek | Designed by <a href="http://www.google..co.uk/">Petr Bartek</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; 
		<a href="http://validator.w3.org/">HTML5</a></p>
	</div>
	<!-- End of the register page content -->
</div>
</div>	
</body>
</html>
