<?php 
	session_start(); 
	require('connect.php');
	
	$article = $_GET['article'];

	$result = mysqli_query($connect, "DELETE FROM news WHERE id_news = $article"); 

	header( 'Location:news_list.php' );
?>