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
			<a href="accounts.php">Account Settings</a>
			<a href="contacts.php">Contacts</a>
		</nav>
	</header>


 	 

		<form action="resetPasswordBackend.php" method="POST">
	 		<fieldset>
	 			<legend>Reset your password</legend>
	 			<label for="userName">Enter username</label>
		 		<input required type="text" id="userName" name="userName">
		 				 		 		 		
		 		<label for="phoneNumber">Enter phone number</label>
		 		<input required type="text" id="phoneNumber" name="phoneNumber">

		 		<label for="otp">Enter OTP</label>
		 		<input required type="text" id="otp" name="otp">
		 		
		 		<label for="password">Enter new password</label>
		 		<input required type="password" id="password" name="password">

		 		<button type="submit">Reset Password</button>

		 		
	 			
	 		</fieldset>	 		 
 	   </form>	

 	    
 	   		
 	    
 	   
 	 

   
 	
 
 </body>
 </html>