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
	<title>dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<!--- some header details --->
	</header>
	<div class="side_nav">
		<div id="label">
			<p>Dashboard</p>
		</div>
		<div id="nav">
				<a class="active" href="dashboard.php">Home</a>
				<a href="dashboard.php">Analytics</a>
				<a href="message.php">Messages</a>
				<a href="movie_add.php">Add Movie</a>
				<a href="tv_show_add.php">Add tV show</a>
				<a href="../index.php">Log Out</a>
		</div>
	</div>
	<div class="adm_cont">
		<!-- begin container head -->
		<div class="head">
			<label class="logo">Filamu254</label>
		</div>
		<p>This part will contain site analytics</p>

		<div class="categories">
			<table>
				<td>Add categories</td>
				<form action="admin_includes/posts.php" method="post">
					<tr>
						<td><p>Categoory:</p></td>
						<td><input type="text" name="cat"></td>
						<td><input type="submit" name="add" value="Add"></td>
					</tr>
				</form>
			</table>
			<?php
				include ('admin_includes/config.php');

				$categories = "SELECT * FROM categories ORDER BY id DESC;";

				$result = $connection->query($categories);

				if(!$result){
					echo "<P> Categories cannot display</P>";
				}else{

					echo "<h4> These are the available categories</h4>";
					$rows = $result->num_rows;

					for ($i=0; $i < $rows; $i++) { 
						$result->data_seek($i);
						$rows = $result->fetch_array(MYSQLI_ASSOC);


						echo "<ul>" .$rows['category'] . "<br></ul>";
					}
				}


			  $fetchVideos = "SELECT * FROM trailers ORDER BY id";
              $result = $connection->query($fetchVideos);
              if(!$result){
                echo "no video to display";
              }else{
                $rows = $result->num_rows;


 
                  $result->data_seek($i);

                  $rows = $result->fetch_array(MYSQLI_ASSOC);

                  $video = $rows['location'];

                  echo "<div >";
                  echo "<video src='/".$video."' controls>";
                                    echo "TITLE:" . $rows['title'];
                  echo "CATEGORY:" . $rows['caategory'];
                  echo "</div>";
              }



              //session_destroy();
			?>
		</div>

	</div>

</body>
</html>