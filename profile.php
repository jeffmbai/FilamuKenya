
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style/user.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<nav class="header">
			<h1><font color="orange">Profile</font></h1>
			<div class="user-admin">
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="index.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="con">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	
	</body>
</html>