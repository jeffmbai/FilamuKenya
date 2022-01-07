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
				<a href="movie_add.php">Add Movie</a>
				<a class="active" href="tv_show_add.php">Add tV show</a>
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

			include ('Admin_dashboard_files_video_dir/admin_includes/config.php');
				// post tv show

				if($_POST['add_tv']){
					$title 		 = $_POST['title'];
					$description = $_POST['description'];
					$category    = $_POST['category'];



					$max_size = 1028758534;


							
					$name = $_FILES['tv']['name'];
					$trailer = $_FILES['trailer']['name'];


					$target_dir = "../choir/Admin_dashboard_files_video_dir/videos/";
					$file = $target_dir . $_FILES['tv']['name'];



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
						if($_FILES['tv']['size'] > $max_size){

							print "<div class = 'message'><p>file too large, file must be at 2000MB maximun size</p></div> ";
						}elseif ($_FILES['tv']['size'] == 0) {

							print "<div class = 'message'><p>file you posted is too small</p></div>";
						}else{

							// upload
							if(move_uploaded_file($_FILES['tv']['tmp_name'], $file)){
									$query = "INSERT INTO tvshows(cat_id, title, description, location)
												VALUES ('$category','$title','$description','$file');";

									$result = $connection->query($query);
								if(!$result){
									echo "<div class = 'message'><p>upload unsuccessful!!</p></div>";

								}else{
									header("location: ../dashboard.php");

								}
							}
						}

					}else{

					echo "<div class = 'message'><p>tv show field left empty or file format not suported</p></div>";
					}
				}
			?>
			<form action="admin_includes/posts.php" method="Post" enctype="multipart/form-data">
				<table>
				<th>Post New Show:</th>
				<tr>
					<td><p>Title:</p></td>
					<td><input type="text" name="title" placeholder="Enter movie title"></td>
				</tr>
				<tr>
					<td><p>Category:</p></td>
					<td><select name="category">
						<option value="Action">Action</option>
						<option value="Adventure">Adventure</option>
						<option value="Crime">Crime</option>
						<option value="Horor">Horor</option>
						<option value="Sci-Fi">Sci-Fi</option>
						<option value="Romance">Romance</option>
					</select></td>
				</tr>
				<tr>
					<td><p>Description:</p></td>
					<td><textarea name="description" cols="50" rows="3" placeholder="Enter description..."></textarea></td>
				</tr>
				<tr>
					<td><p>Trailer</p></td>
					<td><input type="file" name="trailer"></td>
				</tr>
				<tr>
					<td><p>Tv Show:</p></td>
					<td><input type="file" name="tv"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="add_tv" value="Post" id="button"></td>
				</tr>
				</table>
			</form>
		</div>
	</div>

</body>
</html>