<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		session_start();
		$title = $_POST['title'];
		$short_descr = $_POST['descr'];
		$category = $_POST['category'];
		$id_user = $_SESSION['id_user'];
		$photo = $_POST['photo'];
		$text = $_POST['text'];
		
		$date = date('j F Y, H:i');
		
		$str_sql = "INSERT INTO news (title, category, description, text, author_id, date, photo)VALUES('$title', '$category', '$short_descr', '$text', '$id_user', '$date', '$photo')";

		mysqli_query($connect, $str_sql) or die(mysqli_error());
	}

	header('Location:news_list.php');
?>