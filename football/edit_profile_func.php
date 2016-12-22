<?php 
	require_once("connect.php");
	if(isset($_POST['save-changes'])){
		session_start();
		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$city = $_POST['city'];
		$about = $_POST['about-me'];
		$fav_s = $_POST['fav_sports'];
		$fav_c = $_POST['fav_clubs'];
		$id = $_SESSION["id_user"];
		
		
		$str_sql = "UPDATE users SET name='$name', sex='$sex', city='$city', about='$about', fav_sportsmen='$fav_s', fav_clubs='$fav_c' WHERE id_user=$id";

		session_start();
		$_SESSION["user_name"] = $name;
		$_SESSION["user_sex"] = $sex;
		$_SESSION["user_city"] = $city;
		$_SESSION["user_about"] = $about;
		$_SESSION["user_fav_sportsmen"] = $fav_s;
		$_SESSION["user_fav_clubs"] = $fav_c;

		mysqli_query($connect, $str_sql) or die(mysqli_error());
	}

	header( 'Location:userpage.php' );
?>
