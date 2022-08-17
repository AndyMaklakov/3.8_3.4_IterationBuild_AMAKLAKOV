<?php
	ob_start();
	session_start();
		$error = NULL;
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			//connect.php (tells me where to connect servername, database name, username & password)
			require "91902_Database_Assessment_mysqli.php";
			//username and password sent from form
			$myusername = mysqli_real_escape_string($conn, $_POST['username']);
			$mypassword = mysqli_real_escape_string($conn, $_POST['password']);
			
			$query = "SELECT User_ID FROM users WHERE Username = '$myusername' and Password = '$mypassword'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
			
			//If result matched $myusername & $mypassword, table row must be 1 row
			if($count == 1) {
				$_SESSION['login_user'] = $myusername;
				header("location: home.php");
			} else {
				$error = "ERROR! Your Username or Password is invalid";
				}
		}
	ob_end_flush();
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
      <title>Login</title>
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
			 
            <div class="hamburger-menu">
               <input id="menu__toggle" type="checkbox" />
               <label class="menu__btn" for="menu__toggle">
               <span></span>
               </label>
               <ul class="menu__box">
                  <li><a class="menu__item" href="home.php">Home</a></li>
                  <li><a class="menu__item" href="library.php">Library</a></li>
                  <li><a class="menu__item" href="login.php">Login</a></li>
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
							   <p>login box</p>
							</center>

							<br><br>
							<center>
							   <p>please enter your login details:</p>
							</center>

						 </div>
					  
                  </div>
			 
            <br>
			 
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
							<input type="submit" value="Submit">
						</center>
					  
                  	</div>
					  
                  </div>

               </form>
				
               <br>
			 
               <center>
                  <a class="link2" href="insert_user.php">don't have a login? create one here...</a>
               </center>
				
         </div>
		  
		  <div class = "footer">
			 
            <center>
               <p>footer</p>
            </center>
			 
         </div>
		  
      </div>
   </body>
</html>
