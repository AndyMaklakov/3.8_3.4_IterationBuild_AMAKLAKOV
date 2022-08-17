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
		<title>Query 1</title>
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
				
				<div class = "link" style = float:right>
				
					<center>
						<a class="query_nav" href="query1.php">Query1</a>
						<a class="query_nav" href="query2.php">Query2</a>
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

						<b>
	
							<h1>song_id title seconds</h1> <h1>album artist size</h1>

					   </b>
						
				</div>

				<div class = "title3" style = "border-bottom: 0.1vw solid #000;">
					
							<p style = "padding-left: 21.3vw; display: inline;">#</p>

							<p style = "padding-left: 2.5vw; display: inline;">TITLE</p>

							<p style = "padding-left: 12.8vw; display: inline;">ARTIST</p>

							<p style = "padding-left: 4vw; display: inline;">ALBUM</p>

							<p style = "padding-left: 9.3vw; display: inline;">GENRE</p>

							<p style = "padding-left: 4.2vw; display: inline;">SEC</p>

							<p style = "padding-left: 2.5vw; display: inline;">SIZE</p>
					
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

											ORDER BY s.Title DESC, b.Artist DESC");

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
			
			<div class = "footer">
			 
				<center>
				   <p>footer</p>
				</center>
				
			</div>
						
			
		</div>	
	</body>

</html>
