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
	  <link rel="icon" type="image/x-icon" href="/images/sigma_favicon.ico">
      <title>Home</title>
   </head>
   <body>
      <div class = "wrapper">
		  
         <!--<div class = "header">
         </div>-->
		  
         <div class = "nav">
			 
			 <div class = "logo" style = "background-image: url('images/sigmalogowhite.jpg'); background-size: 4vw 4vw; background-position: 0vw;" alt="sigmalogowhite">
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
         <div class = "main_content" style = "background-image: url('images/homepagebackground1.jpg'); background-size: 100vw 50vw; background-position: 0vw" alt="homepagebackground1">
			 
			 <div class = "title1">
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
			 
            <div class = "content_2" style = "overflow: hidden; transition: 0.5s;">
				
               <a href = "query1.php"><img src="images/imagebox1_image1.jpg" alt="imagebox1_image1" class="img" style=border-radius:5px;></a>
				
            </div>
			 
            <div class = "content_3">
				
               <a href = "library.php"><img src="images/imagebox2_image1.jpg" alt="imagebox1_image2" class="img" style=border-radius:5px;></a>
				
            </div>
			 
            <div class = "content_4">
				
               <a href = "query2.php"><img src="images/imagebox3_image1.jpg" alt="imagebox1_image3" class="img" style=border-radius:5px;></a>
				
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
