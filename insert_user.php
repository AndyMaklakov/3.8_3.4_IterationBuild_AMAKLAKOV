<?php
        session_start();
        if(!isset($_SESSION['login_user'])){
                header("location:login.php");
				}
		else{
			$User = $_SESSION['login_user'];
        }
?>

<!DOCTYPE html>
<html style = "background-image: url('images2/insert-delete-update_image1.jpg'); background-position: 0vw; background-size: 100vw; 50vw;" alt=" insert-delete-update_image1">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
	  <link rel="icon" type="image/x-icon" href="/images/sigma_favicon.ico">
      <title>Insert User</title>
   </head>
   <body>
	   
      <div class = "wrapper">
         <!--<div class = "header">
            </div>-->
		  
         <div class = "nav">
			 
			 <div class = "logo" style = "background-image: url('images2/sigmalogoblack.png'); background-size: 4vw 4vw; background-position: 0vw;" alt="sigmalogoblack">
			 </div>
				
				<div class = "admin_nav" style = float:right;>
				
					<center>
						<a class="query_nav" style = padding-right:1vw;color:#EDF6F9; href="insert_user.php">Insert User</a>
						<a class="query_nav" style = padding-right:1vw;color:#EDF6F9; href="delete_user.php">Delete User</a>
						<a class="query_nav" style = padding-right:1vw;color:#EDF6F9; href="update_user.php">Update User</a>
					</center>
					
			 	</div>
			 
            <div class="hamburger-menu">
               <input id="menu__toggle" type="checkbox" />
               <label class="menu__btn" for="menu__toggle">
               <span></span>
               </label>
               <ul class="menu__box">
                  <li><a class="menu__item" href="home.php">Home</a></li>
                  <li><a class="menu__item" href="library.php">Library</a></li>
                  <li><a class="menu__item" href="logout.php">Logout</a></li>
               </ul>
            </div>
			 
         </div>
		  
         <!--Content Boxes-->
         <div class="contact_content">
			 
			 <div class="row">
					  
                     <div class="column">
                     </div>
					  
						 <div class="column2">

							<img src="images/add-icon.jpg" alt="add-icon" class="img" style="padding-left:7.5vw;width:6vw;height:6vw;">

							<br><br>
							<center>
							   <p>INSERT USER</p>
							</center>

						 </div>
					  
               </div>
			 
            <!--Form-->
				
            <form method="post">
				   
                  <!--Name Field-->
				   
                  <div class="row">
					  
                     <div class="column">
                     </div>
					  
                     <div class="column2">
						 
                        <input type="text" name="username" placeholder="Username...">
						 
                     </div>
					  
                  </div>
				   
                  <!--Email Field-->
                  <div class="row">
					  
                     <div class="column">	
                     </div>
					  
                     <div class="column2">
						 
                        <input type="password" name="password" placeholder="Password...">
						 
                     </div>
					  
                  </div>
				   
                  <!--Submit Button-->
				   <div class="row">
					  
                     <div class="column">	
                     </div>
					  
                     <div class="column2">
					  
						<center>
							<input type="submit" name="submit" value="Submit">
						</center>
					  
                  	</div>
					  
                  </div>

               </form>
			 	<?php
					//connect.php (tells where to connect servername, username, password, dbaseName)
					require "91902_Database_Assessment_mysqli.php";
					print "<br><p style = padding-left:8vw;>Connected to server</p>";
			 		
			 		if(isset($_Post['submit']));
						{
						
						$User_ID = isset($_POST['username']) ? $_POST['username']: ''; 
						$PW = isset($_POST['password']) ? $_POST['password']: '';

						//create a variable to store sql code for the 'Add Users' query
						$insertquery = "INSERT INTO `users` (`Username`, `Password`) VALUES ('$User_ID', '$PW')";

						if (mysqli_query($conn,$insertquery))
							{
							echo "<p style = padding-left:9vw;>Record inserted:</p>";
							}
						else
							{
							echo "";
							}
						}
				?>
				
         </div>
		  
		  <div class = "footer" style = "padding-left:3vw;">
			 
				<h1>More Information:</h1>
				<p>Created by: Andrew Maklakov, June - August, 2022<br>
				Copyright ©: 2022, Andrew Maklakov, Tawa College<br>
				Admin: Graeme - Contact Graeme for inserting, deleting or updating a user</p>
				
			</div>
		  
      </div>
   </body>
</html>
