<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Accounts</title>
 	<link rel="stylesheet" type="text/css" href="accounts.css">
 </head>
 <body>

 	<header>
		<nav>
			<a href="index.php">Home</a>
			<a href="blog.php">Blog</a>
			<a href="#">Account Settings</a>
			<a href="contacts.php">Contacts</a>
		</nav>
	</header>


 	 

		<form action="accountsBackend.php" method="POST">
	 		<fieldset>
	 			<legend>Create an account</legend>
	 			<label for="userName">Enter username</label>
		 		<input required type="text" id="userName" name="userName">
		 		
		 		 

		 		<label for="location">Enter location</label>
		 		<input required type="text" id="location" name="location">

		 		<label for="phoneNumber">Enter phone number</label>
		 		<input required type="text" id="phoneNumber" name="phoneNumber">
		 		
		 		<label for="password">Enter password</label>
		 		<input required type="password" id="password" name="password">

		 		<button type="submit">Create Account</button>

		 		<a href="resetPassword.php" style="color: floralwhite; float: right; margin-top: 30px; font-weight: bold; ">Forgot password?</a>
	 			
	 		</fieldset>	 		 
 	   </form>	

 	    
 	   		
 	    
 	   
 	 

   
 	
 
 </body>
 </html>