<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$descr = $_POST['descr'];
		$category = $_POST['category'];
		$photo = $_POST['photo'];
		$text = $_POST['text'];
		$article = $_GET['article'];
		
		$str_sql = "UPDATE news SET title='$title', description='$descr', category='$category', photo='$photo', text='$text' WHERE id_news=$article";

		mysqli_query($connect, $str_sql) or die(mysqli_error());
	}

	header( 'Location:news_list.php' );
?>