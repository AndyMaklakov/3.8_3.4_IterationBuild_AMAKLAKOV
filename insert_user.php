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
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
      <title>Insert User</title>
   </head>
   <body>
	   
      <div class = "wrapper">
         <!--<div class = "header">
            </div>-->
		  
         <div class = "nav">
			 
			 <div class = "logo" style = float:right>
				
					<center>
						
						<p>logo</p>
					
					</center>
				
			 	</div>
				
				<div class = "admin_nav" style = float:right>
				
					<center>
						<a style = padding-right:1vw; href="insert_user.php">Insert User</a>
						<a style = padding-right:1vw; href="delete_user.php">Delete User</a>
						<a style = padding-right:1vw; href="update_user.php">Update User</a>
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

							<center>
							   <p>Insert User</p>
							</center>

							<br><br>
							<center>
							   <p>Insert your new user details here:</p>
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
					print "<center><p>Connected to server</p></center>";
			 		
			 		if(isset($_Post['submit']));
						{
						
						$User_ID = isset($_POST['username']) ? $_POST['username']: ''; 
						$PW = isset($_POST['password']) ? $_POST['password']: '';

						//create a variable to store sql code for the 'Add Users' query
						$insertquery = "INSERT INTO `users` (`Username`, `Password`) VALUES ('$User_ID', '$PW')";

						if (mysqli_query($conn,$insertquery))
							{
							echo "<center><p>Record inserted:</p></center>";
							}
						else
							{
							echo "<center><p>Error inserting record:</p></center>";
							}
						}
				?>
				
         	</div>
		  
		  <div class = "footer">
			 
            <center>
               <p>footer</p>
            </center>
			 
         </div>
		  
      </div>
   </body>
</html>
