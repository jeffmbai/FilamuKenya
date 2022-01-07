<?php
 session_start();

        if(isset($_SESSION['UN'])){
                $username = $_SESSION['UN'];
                $password = $_SESSION['pwd'];
        }else{
                header("location: ../index.php");
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/user.css">
</head>
<body>
		<div class="header">
			<div class="container">
					<h1>Filamu254</h1>
			</div>
				<nav id="navbar">
					<ul id="navigation">
						<li><a href="movie.php">Movies & Series</a>
							<ul>
								<li><a href="movie.php">Action</a></li>
								<li><a href="movie.php">Adventure</a></li>
								<li><a href="movie.php">Crime</a></li>
								<li><a href="movie.php">Horror</a></li>
								<li><a href="movie.php">Sci-Fi</a></li>
								<li><a href="movie.php">Romance</a></li>
							</ul>
						</li>
						<li><a href="tv.php">Tv Shows</a>
							<ul>
								<li><a href="tv.php">Animation</a></li>
								<li><a href="tv.php">Comedy</a></li>
								<li><a href="tv.php">Drama</a></li>
								<li><a href="tv.php">Documentary</a></li>
								<li><a href="tv.php">Music</a></li>
								<li><a href="tv.php">Sports</a></li>
							</ul>
						</li>
					</ul>
				</nav>
		                <div class="user-admin">
						    <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
						    <a href="index.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
        </div><br>
        <div class="user">
        	<div class="video">
        		<video src="trailers/tr1.mp4"controls autoplay muted>
        		</video>
        		    <p><b>The best of all time</b><br>
        		    	Best dance moves in the country by the Ameru dance crew<br>
        		    	Venue: Tom Mboya street<br>
        		    	Director: Washington<br>
        		    	Producers: Maron Design<br>
        		    	Company: Ameru<br>
        		    	Awards: Emmy, Grammy, VOY<br>
        		    	Ratings (5 stars)<br>
        		    	<a href="admin/videos/action_movies_2019_full_movie_english_hollywood_hd(720p).mp4">Watch Full Video</a>
        		    </p>
        	</div>
        	<div class="related">
        	<p>Related</p>
        		<video src="trailers/tr2.mp4" width="350px" controls muted>
        		</video><br><br>
        		<video src="trailers/tr3.mp4" width="350px" controls muted >
        		</video><br><br>
        		<video src="trailers/tr4.mp4" width="350px" controls muted></video>
        	</div>
        </div>
        <footer class="footer">
        	<div class="logoh">
        		<img src="images/1.jpg">
        	</div>
        	<div class="links">
        		<a href="index.php">Home</a><br>
        		<a href="movie.php">Movies & Series</a><br>
        		<a href="tv.php">Tv Shows</a><br>
        	</div>
        	<a href="subscription.php">Subscribe</a><br>
        	<a href="index.php">Go Back</a><br>
        	<i><font color="orange">&COPY product of filamu254</font></i>
        </footer>
</body>
</html>