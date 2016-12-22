<?php 
	session_start(); 
	require('connect.php');
	
	$id = $_GET['id'];

	if ($id == $_SESSION["id_user"]) {
		echo "You cant delete yourself";
	} else {
		$result = mysqli_query($connect, "DELETE FROM users WHERE id_user = $id"); 
	}
	
	header( 'Location:users_list.php' );
?>