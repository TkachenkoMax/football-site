<?php
	session_start();
	require_once('connect.php');

	if(isset($_POST['submit'])) {
		$email = $_POST['email']; 
		$pass = $_POST['password'];
		$pass=md5($pass);

		$result = mysqli_query($connect,"SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC); 

		$_SESSION["email"] = $user['email'];
		$_SESSION["login"] = $user['login'];
		$_SESSION["id_user"] = $user['id_user'];
		$_SESSION["user_name"] = $user['name'];
		$_SESSION["user_sex"] = $user['sex'];
		$_SESSION["user_city"] = $user['city'];
		$_SESSION["user_about"] = $user['about'];
		$_SESSION["user_fav_sportsmen"] = $user['fav_sportsmen'];
		$_SESSION["user_fav_clubs"] = $user['fav_clubs'];
		$_SESSION["user_reg_date"] = $user['reg_date'];
		$_SESSION["is_admin"] = $user['is_admin'];

		if(isset($_SESSION["id_user"])) {
			header( 'Location:index.php' );
		}
	}
?>