<?php 
	$userName = $_POST["userName"];
    $phoneNumber = $_POST["phoneNumber"]; 
    $password = $_POST["password"]; 


    /***************************************************/
       // echo openssl_digest($password, 'SHA256'); 
    
       $password =  openssl_digest($password, 'SHA256'); 
     /*************************************************/


    $passwordReset = false;
     

    $mysqli = new mysqli("localhost", "root", "", "appClients");
	$result = $mysqli->query("UPDATE clients SET password = '$password' WHERE userName = '$userName' AND phoneNumber = '$phoneNumber'");

	    if(false == $result)
	    {
	         echo "FAILED mysqli->query...";
	    }else{
	    		 
             
	    	if($mysqli->affected_rows == 0)
            {
                // echo "Error: username and approval code not found in database. Enter correct details or retry later.";

            }else{

            	// echo "Password reset";
	    		$passwordReset = true;

            }

              
	    }



?>

<?php
if ($passwordReset == FALSE) {
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
				<p>Failed to reset password</p>
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
				<p>Password reset successfully</p>
			</div>
		</body>
	</html>

<?php
}
?>	