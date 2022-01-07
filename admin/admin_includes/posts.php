<?php
	include ('config.php');



	if($_POST['add']){
		$category = $_POST['cat'];


		// ading new category to the category table

		$query = "INSERT INTO categories(category)
						VALUES('$category');";
		$result = $connection->query($query);
		if(!$result){
			die("Upload not successful!");
		}else{
				header("location: ../dashboard.php? You have successfuly added a new category");
		}
	}


	if($_POST['submit']){


		$name = $_POST['full_name'];
		$email = $_POST['email'];
		$country = $_POST['country'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];


		//post the message to the database

		$send = "INSERT INTO messages(name, email, country, subject, message)
				VALUES('$name','$email','$country','$subject','$message');";

		$result = $connection->query($send);

		if(!$result){

			die($connection->error);
		}else{
			print "<p style = 'color: orange; font_size: 16px;'>Thank you, we will get back to you shortly</p>";
		}
	}

	$connection->close();

?>