<?php       
				     
     	$userName = $_POST["userName"];
      	$password = $_POST["password"]; 

      	$letThemThrough = false;

      	$mysqli = new mysqli("localhost", "root", "", "appAdmins");
		$result = $mysqli->query("SELECT userName FROM appAdmins WHERE userName = '$userName' AND password = '$password'");

	    if(false == $result)
	    {
	         echo "FAILED mysqli->query...";
	    }else{
	    		if($result->num_rows == 0)
	            {
	               // echo "Error: username and password not found in database. Enter correct details or retry later.";

	            }else{

	              // echo "Welcome ROOT";

	            	$letThemThrough = true;


	            }

	    }
      

?>



<?php
if ($letThemThrough == FALSE) {
?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Load Balancer</title>
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
				 <p>Incorrect username and/or password.</p>
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
	<title>Load Balancer</title>
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


				




    

     


			   

				<div class="container">
				<!-- <canvas id="map" width="300" height="300"></canvas>
				<canvas id="map2" width="300" height="300"></canvas> -->

			

			
			<div id="Senga">
				<p class="load1" id="Senga">Senga</p>
				<canvas id="area1" width="300" height="125"></canvas>					
			</div>

			<div id="hospital">
				<p>Hospital 5 MW</p>					
			</div>	

			<div id="university">
				<p>University 5 MW</p>
			</div>	
					
			<div id="Ridgemont">
				<p class="load2" id="Ivene">Ivene</p>				
				<canvas id="area4" width="300" height="125"></canvas>
			</div>

					

			<div id="CBD">
				<p id="CBDD">CBD</p>
				<p id="mw">75 MW</p>
				<div id="industrialSite">
					<p>Industrial Site</p>
				</div>
				<canvas id="area6" width="800" height="240"></canvas>
			</div>			
			 		
			<div id="Ivene">
				<p class="load2" id="Ridgemont">Ridgemont</p>
				<canvas id="area2" width="300" height="125"></canvas>
			</div>


			<div id="Riverside">
				<p class="load1" id="Riverside">Riverside</p>
				<canvas id="area3" width="300" height="125"></canvas>
			</div>


			<div id="Thornhill">
				<p class="load1" id="Thornhill">Thornhill</p>				
				<canvas id="area5" width="300" height="125"></canvas>
			</div>

			<div id="hospital">
					 <p>Hospital 5 MW</p>
			</div>


			
		 

		
	</div>

	<div id="form">				
				<form name="formA">
					<!-- <fieldset> -->
						<input type="radio" id="contactChoice1" name="contact" value="all" />
						<label for="contactChoice1">All (during the day)</label>

						<input type="radio" id="contactChoice2" name="contact" value="load1" />
						<label for="contactChoice2">Load 1 (6 a.m to 12 p.m)</label>

						<input type="radio" id="contactChoice3" name="contact" value="load2" />
						<label for="contactChoice3">Load 2 (12 p.m to 6 p.m)</label>

						<input type="radio" id="contactChoice4" name="contact" value="night" />
						<label for="contactChoice3">All (night)</label>

						<button type="submit">Run</button>
					<!-- </fieldset> -->
					
				</form>

				<img >

				<!-- <img src="http://localhost/php/info138/simpleplot.php"> -->
	</div>


	

	<script type="text/javascript">

		const canvas = document.getElementById('area1');
		const ctx = canvas.getContext('2d');

		for (var i = 0; i < 20; i++) 
		{
	      for (var j = 0; j < 20; j++) {

	        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
	                         Math.floor(255 - 42.5 * j) + ')';	                         
	        ctx.beginPath();
	        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
	        ctx.stroke();*/

	      	ctx.save();
	        ctx.fillStyle = 'rgb(0, 0, 0)';
	        // ctx.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
	        ctx.translate(10 + j * 30, 10 + i * 30);
	        ctx.fillRect(0, 0, 15, 15);
	        ctx.restore();
	      }
       }

       const canvas2 = document.getElementById('area2');
	   const ctx2 = canvas2.getContext('2d');
	   for (var i = 0; i < 10; i++) 
		{
	      for (var j = 0; j < 10; j++) {

	        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
	                         Math.floor(255 - 42.5 * j) + ')';	                         
	        ctx.beginPath();
	        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
	        ctx.stroke();*/

	      	ctx2.save();
	        ctx2.fillStyle = 'rgb(0, 0, 0)';
	        // ctx2.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
	        ctx2.translate(10 + j * 30, 10 + i * 30);
	        ctx2.fillRect(0, 0, 15, 15);
	        ctx2.restore();
	      }
       }

	   const canvas3 = document.getElementById('area3');
	   const ctx3 = canvas3.getContext('2d');
	   for (var i = 0; i < 10; i++) 
		{
	      for (var j = 0; j < 10; j++) {

	        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
	                         Math.floor(255 - 42.5 * j) + ')';	                         
	        ctx.beginPath();
	        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
	        ctx.stroke();*/

	      	ctx3.save();
	        ctx3.fillStyle = 'rgb(0, 0, 0)';
	        // ctx3.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
	        ctx3.translate(10 + j * 30, 10 + i * 30);
	        ctx3.fillRect(0, 0, 15, 15);
	        ctx3.restore();
	      }
       }

       const canvas4 = document.getElementById('area4');
	   const ctx4 = canvas4.getContext('2d');
	   for (var i = 0; i < 10; i++) 
	   {
	      for (var j = 0; j < 10; j++) {

	        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
	                         Math.floor(255 - 42.5 * j) + ')';	                         
	        ctx.beginPath();
	        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
	        ctx.stroke();*/

	      	ctx4.save();
	        ctx4.fillStyle = 'rgb(0, 0, 0)';
	        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
	        ctx4.translate(10 + j * 30, 10 + i * 30);
	        ctx4.fillRect(0, 0, 15, 15);
	        ctx4.restore();
	      }
       }


	   const canvas5 = document.getElementById('area5');
	   const ctx5 = canvas5.getContext('2d');
	   for (var i = 0; i < 10; i++) 
		{
	      for (var j = 0; j < 10; j++) {

	        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
	                         Math.floor(255 - 42.5 * j) + ')';	                         
	        ctx.beginPath();
	        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
	        ctx.stroke();*/

	      	ctx5.save();
	        ctx5.fillStyle = 'rgb(0, 0, 0)';
	        // ctx5.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
	        ctx5.translate(10 + j * 30, 10 + i * 30);
	        ctx5.fillRect(0, 0, 15, 15);
	        ctx5.restore();
	      }
       }

       const canvas6 = document.getElementById('area6');
	   const ctx6 = canvas6.getContext('2d');
	   for (var i = 0; i < 10; i++) 
		{
	      for (var j = 0; j < 10; j++) {

	        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
	                         Math.floor(255 - 42.5 * j) + ')';	                         
	        ctx.beginPath();
	        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
	        ctx.stroke();*/

	      	ctx6.save();
	        ctx6.fillStyle = 'yellow';
	        // ctx6.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
	        ctx6.translate(10 + j * 60, 10 + i * 60);
	        ctx6.fillRect(0, 0, 40, 30);
	        ctx6.restore();
	      }
       }

      
       // IF AT NIGHT, SWITCH ON ALL SUBURBS SINCE LOAD FROM THE CBD WILL HAVE DECREASED
       // IF DURING THE DAY, SWITCH ON HALF OF THE NEIGHBOURHOODS. OTHERS GET 6 a.m to 12 p.m and others 12 to 6 p.m. Alternate daily
       // NEVER SWITCH OF HOSPITALS, CBD AND UNIVERSITY
       // ALSO WRITE CODE FOR SHOWING FAULTS i.e some households of a neighbourhood won't have electricity

       ///////////////////////// USE A DARKER YELLOW FOR HOSPITALS AND UNIVERSITY AT NIGHT. THAT SHOWS REDUCTION OF POWER SUPPLY IN THOSE AREAS

       function switchOn()
       {
       		 
       		//  canvas = document.getElementById('area1');
			//  ctx = canvas.getContext('2d');

			for (var i = 0; i < 20; i++) 
			{
		      for (var j = 0; j < 20; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx.save();
		        ctx.fillStyle = 'yellow';
		        // ctx.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx.translate(10 + j * 30, 10 + i * 30);
		        ctx.fillRect(0, 0, 15, 15);
		        ctx.restore();
		      }
	       }

	       for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx3.save();
		        ctx3.fillStyle = 'yellow';
		        // ctx3.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx3.translate(10 + j * 30, 10 + i * 30);
		        ctx3.fillRect(0, 0, 15, 15);
		        ctx3.restore();
		      }
	       }

	       for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx5.save();
		        ctx5.fillStyle = 'yellow';
		        // ctx5.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx5.translate(10 + j * 30, 10 + i * 30);
		        ctx5.fillRect(0, 0, 15, 15);
		        ctx5.restore();
		      }
	       }


	       // THESE TWO DO THE OPPOSITE
	       for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx2.save();
		        ctx2.fillStyle = 'black';
		        // ctx2.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx2.translate(10 + j * 30, 10 + i * 30);
		        ctx2.fillRect(0, 0, 15, 15);
		        ctx2.restore();
		      }
	       }

	        
		   for (var i = 0; i < 10; i++) 
		   {
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx4.save();
		        ctx4.fillStyle = 'black';
		        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx4.translate(10 + j * 30, 10 + i * 30);
		        ctx4.fillRect(0, 0, 15, 15);
		        ctx4.restore();
		      }
	       }



       }






      
      















     function nightTime(fault)
     {

       		 
       		//  canvas = document.getElementById('area1');
			//  ctx = canvas.getContext('2d');

			for (var i = 0; i < 20; i++) 
			{
		      for (var j = 0; j < 20; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx.save();
		        ctx.fillStyle = 'yellow';
		        // ctx.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx.translate(10 + j * 30, 10 + i * 30);
		        ctx.fillRect(0, 0, 15, 15);
		        ctx.restore();
		      }
	       }

	       for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx3.save();
		        ctx3.fillStyle = 'yellow';
		        // ctx3.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx3.translate(10 + j * 30, 10 + i * 30);
		        ctx3.fillRect(0, 0, 15, 15);
		        ctx3.restore();
		      }
	       }

	       for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx5.save();
		        ctx5.fillStyle = 'yellow';
		        // ctx5.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx5.translate(10 + j * 30, 10 + i * 30);
		        ctx5.fillRect(0, 0, 15, 15);
		        ctx5.restore();
		      }
	       }

	       const canvas2 = document.getElementById('area2');
		   const ctx2 = canvas2.getContext('2d');
		   for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx2.save();
		        ctx2.fillStyle = 'yellow';
		        // ctx2.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx2.translate(10 + j * 30, 10 + i * 30);
		        ctx2.fillRect(0, 0, 15, 15);
		        ctx2.restore();
		      }
	       }

	        
		   for (var i = 0; i < 10; i++) 
		   {
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx4.save();
		        ctx4.fillStyle = 'yellow';
		        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx4.translate(10 + j * 30, 10 + i * 30);
		        ctx4.fillRect(0, 0, 15, 15);
		        ctx4.restore();
		      }
	       }


	       if(fault == true)
	       {
	       		     setTimeout(blackOut4, 1500);
	       			
	       }
	        
	           
	        
     }



     function blackOut4()
     {
     	for (var i = 0; i < 10; i++) 
				   {
				      for (var j = 0; j < 10; j++) {

				        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
				                         Math.floor(255 - 42.5 * j) + ')';	                         
				        ctx.beginPath();
				        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
				        ctx.stroke();*/

				      	ctx4.save();
				        ctx4.fillStyle = 'black';
				        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
				        ctx4.translate(10 + j * 30, 10 + i * 30);
				        ctx4.fillRect(0, 0, 15, 15);
				        ctx4.restore();
				      }
			       }

			       setTimeout(blackOut2, 1200);

     }

     function blackOut2()
     {
     	for (var i = 0; i < 10; i++) 
				   {
				      for (var j = 0; j < 10; j++) {

				        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
				                         Math.floor(255 - 42.5 * j) + ')';	                         
				        ctx.beginPath();
				        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
				        ctx.stroke();*/

				      	ctx2.save();
				        ctx2.fillStyle = 'black';
				        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
				        ctx2.translate(10 + j * 30, 10 + i * 30);
				        ctx2.fillRect(0, 0, 15, 15);
				        ctx2.restore();
				      }
			       }

			       setTimeout(blackOut3, 900);

     }

     function blackOut3()
     {
     	for (var i = 0; i < 10; i++) 
				   {
				      for (var j = 0; j < 10; j++) {

				        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
				                         Math.floor(255 - 42.5 * j) + ')';	                         
				        ctx.beginPath();
				        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
				        ctx.stroke();*/

				      	ctx3.save();
				        ctx3.fillStyle = 'black';
				        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
				        ctx3.translate(10 + j * 30, 10 + i * 30);
				        ctx3.fillRect(0, 0, 15, 15);
				        ctx3.restore();
				      }
			       }

			       setTimeout(blackOut1, 600);

     }

     function blackOut1()
     {
     	for (var i = 0; i < 10; i++) 
				   {
				      for (var j = 0; j < 10; j++) {

				        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
				                         Math.floor(255 - 42.5 * j) + ')';	                         
				        ctx.beginPath();
				        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
				        ctx.stroke();*/

				      	ctx.save();
				        ctx.fillStyle = 'black';
				        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
				        ctx.translate(10 + j * 30, 10 + i * 30);
				        ctx.fillRect(0, 0, 15, 15);
				        ctx.restore();
				      }
			       }

			       setTimeout(blackOut5, 300);

     }

     function blackOut5()
     {
     	for (var i = 0; i < 10; i++) 
				   {
				      for (var j = 0; j < 10; j++) {

				        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
				                         Math.floor(255 - 42.5 * j) + ')';	                         
				        ctx.beginPath();
				        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
				        ctx.stroke();*/

				      	ctx5.save();
				        ctx5.fillStyle = 'black';
				        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
				        ctx5.translate(10 + j * 30, 10 + i * 30);
				        ctx5.fillRect(0, 0, 15, 15);
				        ctx5.restore();
				      }
			       }

			         // setTimeout(blackOut6, 3000);

     }

      







     function switchOff()
       {
       		 
       		//  canvas = document.getElementById('area1');
			//  ctx = canvas.getContext('2d');

			for (var i = 0; i < 20; i++) 
			{
		      for (var j = 0; j < 20; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx.save();
		        ctx.fillStyle = 'black';
		        // ctx.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx.translate(10 + j * 30, 10 + i * 30);
		        ctx.fillRect(0, 0, 15, 15);
		        ctx.restore();
		      }
	       }

	       for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx3.save();
		        ctx3.fillStyle = 'black';
		        // ctx3.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx3.translate(10 + j * 30, 10 + i * 30);
		        ctx3.fillRect(0, 0, 15, 15);
		        ctx3.restore();
		      }
	       }

	       for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx5.save();
		        ctx5.fillStyle = 'black';
		        // ctx5.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx5.translate(10 + j * 30, 10 + i * 30);
		        ctx5.fillRect(0, 0, 15, 15);
		        ctx5.restore();
		      }
	       }


	       // THESE TWO DO THE OPPOSITE
	       for (var i = 0; i < 10; i++) 
			{
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx2.save();
		        ctx2.fillStyle = 'yellow';
		        // ctx2.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx2.translate(10 + j * 30, 10 + i * 30);
		        ctx2.fillRect(0, 0, 15, 15);
		        ctx2.restore();
		      }
	       }

	        
		   for (var i = 0; i < 10; i++) 
		   {
		      for (var j = 0; j < 10; j++) {

		        /*ctx.strokeStyle = 'rgb(0, ' + Math.floor(255 - 42.5 * i) + ', ' + 
		                         Math.floor(255 - 42.5 * j) + ')';	                         
		        ctx.beginPath();
		        ctx.arc(12.5 + j * 25, 12.5 + i * 25, 10, 0, Math.PI * 2, true);
		        ctx.stroke();*/

		      	ctx4.save();
		        ctx4.fillStyle = 'yellow';
		        // ctx4.fillStyle = 'rgb(' + (51 * i) + ', ' + (255 - 51 * i) + ', 255)';
		        ctx4.translate(10 + j * 30, 10 + i * 30);
		        ctx4.fillRect(0, 0, 15, 15);
		        ctx4.restore();
		      }
	       }



       }


       function fault()
       {  
       	   nightTime(true);
       	  
       }







      //  var body = document.body;
      // body.addEventListener("click", fault, false);
      // body.addEventListener("click", switchOn, false);
      // body.addEventListener("dblclick", switchOff, false);
      // body.addEventListener("keydown", nightTime, false);

       var f = document.forms["formA"];
       f.addEventListener("submit", readForm, false);

       function readForm(event)
       {  
       	   const inputs = document.querySelectorAll('input');
       	   for (const input of inputs)
       	   {
       	   		if (input.checked)
       	   		{
       	   			// alert(input.value);

       	   			if(input.value == "all")
       	   			{
       	   				       	   			 
					       // alert("all");
	       	   				nightTime(true);

	       	   			   const Load1Ps = document.querySelectorAll("p.load1");
					       for(const p of Load1Ps)
					       {
					       	 p.innerText = p.id;
					       }

	       	   			   const Load2Ps = document.querySelectorAll("p.load2");
					       for(const p of Load2Ps)
					       {
					       	 p.innerText = p.id;
					       }

					       const cbdP = document.querySelector("#mw");
					       cbdP.innerText = "75 MW";

					       const img = document.querySelector("img");
					       img.setAttribute("src", "graphs/all.jpg");



       	   			}

       	   			if(input.value == "load1")
       	   			{
       	   				// alert("load1");
       	   				switchOn();

       	   			   const Load1Ps = document.querySelectorAll("p.load1");
				       for(const p of Load1Ps)
				       {
				       	 p.innerText = p.id + " 5 MW";
				       }

				       // OPPOSite
				       const Load2Ps = document.querySelectorAll("p.load2");
				       for(const p of Load2Ps)
				       {
				       	 p.innerText = p.id;
				       }

				       const cbdP = document.querySelector("#mw");
				       cbdP.innerText = "75 MW";

				       const img = document.querySelector("img");
					   img.setAttribute("src", "graphs/load1.jpg");


       	   			}

       	   			if(input.value == "load2")
       	   			{
       	   				// alert("load2");
       	   				switchOff();

       	   			   const Load2Ps = document.querySelectorAll("p.load2");
				       for(const p of Load2Ps)
				       {
				       	 p.innerText = p.id + " 5 MW";
				       }

				       // OPPOSite
				       const Load1Ps = document.querySelectorAll("p.load1");
				       for(const p of Load1Ps)
				       {
				       	 p.innerText = p.id;
				       }

				       const cbdP = document.querySelector("#mw");
				       cbdP.innerText = "75 MW";

				       const img = document.querySelector("img");
					   img.setAttribute("src", "graphs/load2.jpg");

       	   			}

       	   			if(input.value == "night")
       	   			{
       	   				// alert("night");
       	   				nightTime();

       	   			   const Load1Ps = document.querySelectorAll("p.load1");
				       for(const p of Load1Ps)
				       {
				       	 p.innerText = p.id + " 5 MW";
				       }

				       const Load2Ps = document.querySelectorAll("p.load2");
				       for(const p of Load2Ps)
				       {
				       	 p.innerText = p.id + " 5 MW";
				       }

				       const cbdP = document.querySelector("#mw");
				       cbdP.innerText = "60 MW";

				       const img = document.querySelector("img");
					   img.setAttribute("src", "graphs/night.jpg");
       	   			}
       	   		}
       	   }

       	   event.preventDefault();
       	  
       }





       




       

		 
		
	</script>


 
	
</body>
</html>




<?php
}
?>