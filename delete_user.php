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
      <title>Delete User</title>
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

							<center><br><br><br>
							   <p>Delete User</p>
							</center>

							<br><br>
							<center>
							   <p>Insert the user details you want to delete here:</p>
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
							<input type="submit" name="submit" value="Delete">
						</center>
					  
                  	</div>
					  
                  </div>

               </form>
			 	<?php
					require "91902_Database_Assessment_mysqli.php";
					print "<p style = padding-left:8vw;>Connected to server</p>";
							
					$UserID = isset($_POST["username"]) ? $_POST['username']: ''; 
							
					//create a variable to store sql code for the 'Add Users' query					
					$deletequery = "DELETE FROM users WHERE Username = '$UserID'";

					if (mysqli_query($conn,$deletequery))
					{
					echo "<p style = padding-left:9.5vw;>Record deleted:</p>";
					}
					else
					{
					echo "";
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
