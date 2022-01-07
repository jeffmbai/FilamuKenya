<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/layout.css">
</head>
<body>
	<div class="login">
			<?php

			require 'includes/config.php';



					$username = $_POST['UN'];
					$password = $_POST['pwd'];

				if(isset($username) && isset($password)){
					// querry the database
					$querry = "SELECT * FROM user WHERE username = '" . $username . "' 
							   AND password= '" . $password . "';";
					$result = $connection->query($querry);
					if(!$result) die($connection->error);


					$row = $result->num_rows;
					if($row == 1){
						session_start();
						$_SESSION['UN'] = $username;
						$_SESSION['pwd'] = $password;
						
						header("location: home.php");
					}else{
						echo "<p style = 'color: red'> Wrong username and password comination</p>";
					}
				}
			?>
		<form action="userlogin.php" method="post">
			<label class="head">Login</label>
			<p>Username: <input type="text" name="UN" placeholder="enter username..."></p>
			<p>Password: <input type="password" name="pwd" placeholder="password"></p>
			<button type="submit" name="login">Login</button>
			<p>Don't have an account? <a href="choir_signup.php">Sign Up</a></p>
		</form>
	</div>

</body>
</html>