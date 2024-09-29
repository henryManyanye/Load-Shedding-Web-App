<?php 
      

    /* if($_POST["userName"] && $_POST["password"])
     {
     	$userName = $_POST["userName"];
      	$password = $_POST["password"]; 

      	$mysqli = new mysqli("localhost", "root", "", "appAdmins");
		$result = $mysqli->query("SELECT userName FROM appAdmins WHERE userName = '$userName' AND password = '$password'");

	    if(false == $result)
	    {
	         echo "FAILED $mysqli->query...";
	    }else{
	    		  if($result->num_rows == 0)
	            {
	                echo "Error: username and password not found in database. Enter correct details or retry later.";

	            }else{

	            	echo "Welcome ROOT";             	
	            }

	    }
     } */ 

	
?>


<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Login Page</title>
 	<link rel="stylesheet" type="text/css" href="login.css">
 </head>
 <body>

 	<header>
		<nav>
			<a href="#">Home</a>
			<a href="blog.php">Blog</a>
			<a href="accounts.php">Account Settings</a>
			<a href="contacts.php">Contacts</a>
		</nav>
	</header>


 	<?php 
	 
	if($_POST['userName'] == null){  ?>

		<form action="login.php" method="post">
	 		<fieldset>
	 			<legend>Enter your login details</legend>
	 			<label for="userName">Enter your username</label>
		 		<input type="text" id="userName" name="userName">		 		 
		 		
		 		<label for="password">Enter your password</label>
		 		<input type="password" id="password" name="password">

		 		<button type="submit">Login</button>
	 			
	 		</fieldset>	 		 
 	   </form>	
 	<?php   	
	}else{ ?>

		<form action="login.php" method="post">
	 		<fieldset>
	 			<legend>Wrong password. Try again</legend>
	 			<label for="userName">Enter your username</label>
		 		<input type="text" id="userName" name="userName">
		 		
		 		<label for="password">Enter your password</label>
		 		<input type="text" id="password" name="password">

		 		<button type="submit">Login</button>
	 			
	 		</fieldset>	 		 
 	   </form>	

	<?php } ?>

  <!-- <img src="simpleplot.php"> -->
 	
 
 </body>
 </html>