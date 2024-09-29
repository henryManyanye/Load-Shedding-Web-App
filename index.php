<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Home Page</title>
 	<link rel="stylesheet" type="text/css" href="index.css">
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

	


  
	 
	 

		<form action="loadBalancer.php" method="post">
	 		<fieldset>
	 			<legend>Enter login details</legend>
	 			<label for="userName">Enter username</label>
		 		<input required type="text" id="userName" name="userName">		 		 
		 		
		 		<label for="password">Enter password</label>
		 		<input required type="password" id="password" name="password">

		 		<button type="submit">Login</button>
	 			
	 		</fieldset>	 		 
 	   </form>	
 	 
 	
 
 </body>
 </html>