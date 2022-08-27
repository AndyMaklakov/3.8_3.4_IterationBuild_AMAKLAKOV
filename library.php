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
		<title>Library</title>
	</head>

	<body>
	
		<div class = "wrapper2">
			
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
						<a class="query_nav" style = padding-right:1vw; href="query1.php">Query1</a>
						<a class="query_nav" style = padding-right:1vw; href="query2.php">Query2</a>
						<?php
							 if ($_SESSION['login_user'] == "graeme" or $_SESSION['login_user'] == "Graeme"){
								 echo '<a class="query_nav" style = padding-right:1vw; href="insert_user.php">Settings</a>';
							 }
						 ?>
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
			<div class = "main_content">
				

				
				<div class = "title2">
					<center>

							<h1>Library</h1>
							<p>Graeme's playlist</p>
					</center>

				</div>

				<div class = "title3" style = "border-bottom: 0.1vw solid #000;">
					
							<?php
								require "91902_Database_Assessment_mysqli.php";

								//Creates a variable to store the sql query
								$query = ("SELECT SEC_TO_TIME(SUM(Seconds))
											FROM song_details
											WHERE 1");

								//Runs and stores the query using the variables $con (see nav.php) and $query
								$result = mysqli_query($conn,$query);
								//runs in a while 'while' loop
								while($output=mysqli_fetch_array($result))
								{
							?>
					
							<p style = "padding-left: 21.3vw; display: inline;">#</p>

							<p style = "padding-left: 2.5vw; display: inline;">TITLE</p>

							<p style = "padding-left: 12.8vw; display: inline;">ARTIST</p>

							<p style = "padding-left: 4vw; display: inline;">ALBUM</p>

							<p style = "padding-left: 9.3vw; display: inline;">GENRE</p>

							<p style = "padding-left: 4.2vw; display: inline;">SEC</p>

							<p style = "padding-left: 2.5vw; display: inline;">SIZE</p>
							
							<p style = "padding-left: 6vw; display: inline;">Total Time:</p>
							
							<p style = "padding-left: 0.5vw; display: inline;"><?php echo $output['SEC_TO_TIME(SUM(Seconds))']; ?></p>
								
							<?php
							//Closes the output while loop
							}
							?>
					
				</div>

					<div class = "content_5">
							
							<?php
								require "91902_Database_Assessment_mysqli.php";

								//Creates a variable to store the sql query
								$query = ("SELECT s.Song_ID, s.Title, s.Seconds, s.Size, a.Album, b.Artist, c.Genre
											FROM song_details AS s 
											INNER JOIN album_id a ON s.Album_ID = a.Album_ID

											JOIN song_to_artist d ON s.Song_ID = d.Song_ID
											JOIN artist_id b ON b.Artist_ID = d.Artist_ID

											JOIN song_to_genre e ON s.Song_ID = e.Song_ID
											JOIN genre_id c ON c.Genre_ID = e.Genre_ID

											ORDER BY s.Song_ID ASC");

								//Runs and stores the query using the variables $con (see nav.php) and $query
								$result = mysqli_query($conn,$query);
								//runs in a while 'while' loop
								while($output=mysqli_fetch_array($result))
								{
								?>
								<!--php is above. HTML is below. Used to output the query result-->
						
								<div class ="test" style = "border-bottom: 0.1vw solid #000; border-left: 0.1vw solid #000; border-right: 0.1vw solid #000;">
									<heading2>

										<p><?php echo $output['Song_ID']; ?></p>

										<p><?php echo $output['Title']; ?></p>

										<p><?php echo $output['Artist']; ?></p>

										<p><?php echo $output['Album']; ?></p>

										<p><?php echo $output['Genre']; ?></p>

										<p><?php echo $output['Seconds']; ?></p>

										<p><?php echo $output['Size']; ?></p>

									</heading2>

								</div>
								
								
							
								<?php
								//Closes the output while loop
								}
								?>

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
