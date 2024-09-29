<?php 
	$userName = $_POST["userName"];
    $location = $_POST["location"]; 
    $phoneNumber = $_POST["phoneNumber"]; 
    $password = $_POST["password"]; 


    /***************************************************/
       // echo openssl_digest($password, 'SHA256'); 
    
       $password =  openssl_digest($password, 'SHA256'); 
     /*************************************************/

    $accountCreated = false;

    $mysqli = new mysqli("localhost", "root", "", "appClients");
	$result = $mysqli->query("INSERT INTO clients VALUES ('$userName', '$location', '$phoneNumber', '$password')");

	    if(false == $result)
	    {
	         echo "FAILED mysqli->query...";
	    }else{
	    		 
             // echo "Account Created";

             $accountCreated = true;
	    }


?>


<?php
if ($accountCreated == FALSE) {
?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Account Settings</title>
			<link rel="stylesheet" href="loadBalancer.css">
		</head>
		<body>

			<header>
				<nav>
					<a href="index.php">Home</a>
					<a href="blog.php">Blog</a>
					<a href="accounts.php">Account Settings</a>
					<a href="contacts.php">Contacts</a>
				</nav>
			</header>

			<div id="incorrectPassword">
				<p>Failed to create account</p>
			</div>
		</body>
	</html>

<?php
} else {
?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Account Settings</title>
			<link rel="stylesheet" href="loadBalancer.css">
		</head>
		<body>

			<header>
				<nav>
					<a href="index.php">Home</a>
					<a href="blog.php">Blog</a>
					<a href="accounts.php">Account Settings</a>
					<a href="contacts.php">Contacts</a>
				</nav>
			</header>

			<div id="incorrectPassword">
				<p>Account created successfully</p>
			</div>
		</body>
	</html>

<?php
}
?>	