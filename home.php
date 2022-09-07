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
	  <link rel="icon" type="image/x-icon" href="/images2/sigma_favicon.png">
      <title>Home</title>
   </head>
   <body>
      <div class = "wrapper">
		  
         <!--<div class = "header">
         </div>-->
		  
         <div class = "nav">
			 
			 <div class = "logo">
				 <a href = "home.php"><img src="images2/sigmalogofinal.png" alt="sigmalogofinal" class="img_logo" style=padding-bottom:1vw;></a>
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
         <div class = "main_content" style = "background-image: url('images2/homepagebackground3.jpg'); background-size: 100vw 50vw; background-position: 0vw" alt="homepagebackground3">
			 
			 <div class = "title1">
				<b>
					  <h1 style = "color: white; padding-left: 45.5vw;">Welcome</h1>
               </b>
				 
				<b> 
                     <p style = "color: white; padding-left: 42vw;">See Graeme's playlists here:</p>
               </b>
				 
            </div>
			 
            <!--Content Boxes-->
			 
            <div class = "content_2">
			
				<a href = "query1.php"><img src="images2/imagebox1_image2.jpg" alt="imagebox1_image2" class="image" style=border-radius:5px;></a>
				
				<div class="middle">
						<div class ="text">Query1</div>
				</div>
				
            </div>
			 
            <div class = "content_3">
				
               <a href = "library.php"><img src="images/imagebox3_image1.jpg" alt="imagebox3_image1" class="image" style=border-radius:5px;></a>
				
				<div class="middle">
					<div class="text">Library</div>
				</div>
				
            </div>
			 
            <div class = "content_4">
				
               <a href = "query2.php"><img src="images/imagebox2_image1.jpg" alt="imagebox2_image1" class="image" style=border-radius:5px;></a>
				
				<div class="middle">
					<div class="text">Query2</div>
				</div>
				
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
