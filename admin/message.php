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
				<a href="dashboard.php">Home</a>
				<a href="dashboard.php">Analytics</a>
				<a class="active" href="message.php">Messages</a>
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
		<p>Your Messages</p>

		<?php
			include 'admin_includes/config.php';



			$message = "SELECT * FROM messages ORDER BY id DESC;";

			$result = $connection->query($message);
			if(!$result) die($connection->error);


			$rows = $result->num_rows;


			for ($i=0; $i < $rows; $i++) { 

				$result->data_seek($i);
				$rows = $result->fetch_array(MYSQLI_ASSOC);

				echo "<div style = 'width: 500px; margin_left: auto; margin_ringt: auto;'>";


				echo $rows['name']    . "<br>";
				echo $rows['email']   ."<br>";
				echo $rows['country'] . "<br>";
				echo $rows['subject'] . "<br>";
				echo $rows['message'] . "<br>";


				echo "</div>";
			}
		?>
	</div>

</body>
</html>