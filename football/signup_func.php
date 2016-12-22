<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$email = $_POST['e-mail'];
		$login = $_POST['login'];
		$pass = $_POST['pass'];
		$confirmpass = $_POST['confirmpass'];
		
		if($confirmpass!=$pass) echo "Не совпадают пароли";
		else{$pass = md5($pass);
		
		$request = mysqli_query($connect, "SELECT email FROM users WHERE email = '$email'");
		$email_db = mysqli_fetch_array($request);
		if(!$email_db['email']=="") {
			echo "Такой e-mail уже зарегистрирован";
		}
		else{
			$request = mysqli_query($connect, "SELECT login FROM users WHERE login = '$login'");
			$login_db = mysqli_fetch_array($request);
			if(!$login_db['login']=="") echo "Такой login уже зарегистрирован";
			else{
				date_default_timezone_set('UTC+3');
				
				$reg_date = date('j F Y');
				
				$str_sql = "INSERT INTO users (email, password, login, reg_date)VALUES('$email', '$pass', '$login', '$reg_date')";
		
				mysqli_query($connect, $str_sql) or die(mysqli_error($connect));
		
				header( 'Location:index.php' );
			}
		}
		}
	}
?>