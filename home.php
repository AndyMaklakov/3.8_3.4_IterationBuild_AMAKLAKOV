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
      <title>Home</title>
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
				 <?php
				 if ($_SESSION['login_user'] == "graeme" or $_SESSION['login_user'] == "Graeme"){
					 echo '<a class="query_nav" style = padding-right:1vw;color:#EDF6F9; href="insert_user.php">Settings</a>';
				 }
				 ?>
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
         <div class = "main_content">
            
			 <div class = "title1">
               <br>
				 <b>
                  <center>
					  <h1>Welcome</h1>
                  </center>
               </b>
				 
				<b>
                  <center>
                     <p>See new releases here</p>
                  </center>
               </b>
				 
            </div>
			 
            <!--Content Boxes-->
			 
            <div class = "content_2">
				
               <center>
                  <p>image box 1</p>
               </center>
				
            </div>
			 
            <div class = "content_3">
				
               <center>
                  <p>image box 2</p>
               </center>
				
            </div>
			 
            <div class = "content_4">
				
               <center>
                  <p>image box 3</p>
               </center>
				
            </div>
			 
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
