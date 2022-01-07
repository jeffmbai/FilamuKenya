s
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/layout.css">
</head>
<body>
	<div class="signup">
		<?php
			require 'includes/config.php';


				$f_name  = $_POST['FN'];
				$surname = $_POST['SN'];
				$email   = $_POST['email'];
				$u_name  = $_POST['UN'];
				$pwd 	 = $_POST['pwd'];
				$c_pwd   = $_POST['c_pwd'];



				if(isset($u_name) && isset($pwd) && isset($c_pwd)){

					if($pwd != $c_pwd){
						$error[] = "<p style = 'color: red'>Error! your passwords did not match</p>";
						print $error[0];
					}else{

						$pass_len = strlen($pwd);
						if($pass_len > 16){
							$error[] = "<p style = 'color: red'>password too long</p>";
							print $error[0];
						}
					}

					$name_len = strlen($u_name);
					if($name_len > 10){
						$error[] = "<p style = 'color: red '> username too long</p>";
						print $error[0];
					}

					if($error == 0 ){
						$query = "INSERT INTO user(first_name, surname, email, username, password)
									VALUES('$f_name', '$surname', '$email','$u_name', '$pwd');";
						$result = $connection->query($query);
						if(!$result){
							die($connection->error);
						}else{
							echo "<p style = 'color: blue'>you have been signed up successfully.<br> now go to login and start enjoying our services <a href = 'userlogin.php'>Login</a></p>";
						}
					}
				}

		?>
		<form action="choir_signup.php" method="post">
			<label class="head">SignUp</label>
			<tr>
				<td><p>First Name</p></td>
				<td><input type="text" name="FN" placeholder="First Name..."></td>
			</tr>
			<tr>
				<td><p>Surname</p></td>
				<td><input type="text" name="SN" placeholder="Surname..."></td>
			</tr>
			<tr>
				<td><p>Email</p></td>
				<td><input type="text" name="email" placeholder="enter email here..."></td>
			</tr>
			<tr>
				<td><p>Username</p></td>
				<td><input type="text" name="UN" placeholder="Username..."></td>
			</tr>
			<tr>
				<td><p>Password</p></td>
				<td><input type="password" name="pwd" placeholder="enter your password..."></td>
			</tr>
			<tr>
				<td><p>Confirm Password:</p></td>
				<td><input type="password" name="c_pwd" placeholder="confirm password ..."></p></td>
			</tr>
			<button class="active" type="submit" name="signup">signup</button>
			<p>Already have an account? <a href="userlogin.php">Login</a></p>
		</form>
	</div>

</body>
</html>