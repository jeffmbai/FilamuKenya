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
				<a href="message.php">Messages</a>
				<a class="active" href="movie_add.php">Add Movie</a>
				<a href="tv_show_add.php">Add tV show</a>
				<a href="../index.php">Log Out</a>
		</div>
	</div>
	<div class="adm_cont">
		<!-- begin container head -->
		<div class="head">
			<label class="logo">Filamu254</label>
		</div>


		<div class="content_add" id="movie_add">
			<?php 
			include ('admin_includes/config.php');
				// check wether aby detail is submited
					if($_POST['add_movie']){
						$title 		 = $_POST['title'];
						$description = $_POST['description'];
						$category    = $_POST['category'];



						$max_size = 1028758534;


								
						$name = $_FILES['movie']['name'];
						$trailer = $_FILES['trailer']['name'];


						$target_dir = "../choir/admin/videos/";
						$file = $target_dir . $_FILES['movie']['name'];



						$post_trailer =  $target_dir . $_FILES['trailer']['name'];


						if(move_uploaded_file($_FILES['trailer']['tmp_name'], $post_trailer)){
							$post = "INSERT INTO trailers(title, location)
									 VALUES('$title', '$post_trailer');";
							$result = $connection->query($post);

							if(!$result){
								echo "Trailer Not posted successfuly";
							} else{
								echo "Trailer posted successfuly, goto home to view it";
							}
						}else{
							echo "trailer field left empty";
						}



						// select file type 
						$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));

						// set array of acceptable files extentions
						$file_ext = array("mp4","mkv","avi","3gp","mov","mpeg");

						// check wether our file extention matches accepted ones

						if(in_array($file_type, $file_ext)){
							// check file size
							if($_FILES['movie']['size'] > $max_size){

								print "<div class = 'message'><p>file too large, file must be at 2000MB maximun size</p></div> ";
							}elseif ($_FILES['movie']['size'] == 0) {

								print "<div class = 'message'><p>file you posted is too small</p></div>";
							}else{

								// upload
								if(move_uploaded_file($_FILES['movie']['tmp_name'], $file)){
										$query = "INSERT INTO movies(cat_id, title, description, location)
													VALUES ('$category','$title','$description','$file');";

										$result = $connection->query($query);
									if(!$result){
										echo "<div class = 'message'><p>upload unsuccessful!!</p></div>";

									}else{
										header("location: ../admin/dashboard.php");

									}
								}
							}

						}else{

						echo "<div class = 'message'><p>movie field left empty or file format unsuported</p></div>";
						}
					}
			?>
			<form action="movie_add.php" method="Post" enctype="multipart/form-data">
				<table>
				<th>Post New Movie:</th>
				<tr>
					<td><p>Title:</p></td>
					<td><input type="text" name="title" placeholder="Enter movie title"></td>
				</tr>
				<tr>
					<td><p>Category:</p></td>
					<td><select name="category">
						<option value="1">Action</option>
						<option value="2">Romance</option>
						<option value="3">Adventure</option>
						<option value="6">Horor</option>
						<option value="11">Sci-Fi</option>
						<option value="12">Crime</option>
					</select></td>
				</tr>
				<tr>
					<td><p>Description:</p></td>
					<td><textarea name="description" cols="50" rows="3" placeholder="Enter description..."></textarea></td>
				</tr>
				<tr>
					<td><p>Trailer:</p></td>
					<td><input type="file" name="trailer"></td>
				</tr>
				<tr>
					<td><p>Movie:</p></td>
					<td><input type="file" name="movie"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="add_movie" value="Post" id="button"></td>
				</tr>
				</table>
			</form>
		</div>
	</div>

</body>
</html>