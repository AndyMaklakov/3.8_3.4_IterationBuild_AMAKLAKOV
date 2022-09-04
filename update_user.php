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
<html style = "background-image: url('images/insert-delete-update_image1.jpg'); background-position: 0vw; background-size: 100vw; 50vw;" alt=" insert-delete-update_image1">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
	  <link rel="icon" type="image/x-icon" href="/images/sigma_favicon.ico">
      <title>Update User</title>
   </head>
   <body>
	   
      <div class = "wrapper">
         <!--<div class = "header">
            </div>-->
		  
         <div class = "nav">
			 
			 <div class = "logo" style = "background-image: url('images/sigmalogowhite.jpg'); background-size: 4vw 4vw; background-position: 0vw;" alt="sigmalogowhite">
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

							<br><br><br>
							   <img src="images/update-icon2.jpg" alt="update-icon" class="img" style="padding-left:9vw;width:2.6vw;height:2.6vw;">

							<br><br>
							<center>
							   <p>UPDATE USER</p>
							</center>

						 </div>
					  
                  </div>
			 
            <!--Form-->
				
            <form method="post" id="update_user.php">
				   
                  <!--Name Field-->
				   
                  <div class="row">
					  
                     <div class="column">
                     </div>
					  
                     <div class="column2">
						 
                        <input type="text" name="ExistingUsername" placeholder="Existing Username...">
						 
                     </div>
					  
                  </div>
				   
                  <!--Email Field-->
                  <div class="row">
					  
                     <div class="column">	
                     </div>
					  
                     <div class="column2">
						 
                        <input type="text" name="NewUsername" placeholder="New Username...">
						 
                     </div>
					  
                  </div>
				   
                  <!--Submit Button-->
				   <div class="row">
					  
                     <div class="column">	
                     </div>
					  
                     <div class="column2">
					  
						<center>
							<input type="submit" name="submit" value="Update">
						</center>
					  
                  	</div>
					  
                  </div>

               </form>
			 	<?php
					require "91902_Database_Assessment_mysqli.php";
					print "<p style = padding-left:8vw;>Connected to server</p>";

					$ExistingUserID = isset($_POST["ExistingUsername"]) ? $_POST['ExistingUsername']: ''; 
					$NewUserID = isset($_POST["NewUsername"]) ? $_POST['NewUsername']: ''; 

					//create a variable to store sql code for the 'Add Users' query
					$updatequery = "UPDATE users SET Username = '$NewUserID' WHERE Username = '$ExistingUserID'";
					if (mysqli_query($conn,$updatequery))
					{
					echo "<p style = padding-left:9vw;>Record updated:</p>";
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
