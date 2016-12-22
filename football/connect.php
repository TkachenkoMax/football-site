<?php
		$connect = mysqli_connect('localhost', 'root', 'root', 'football');
		mysqli_query($connect,"SET NAMES 'utf8'"); 
		mysqli_query($connect,"SET CHARACTER SET 'utf8'"); 
		mysqli_query($connect,"SET SESSION collation_connection = 'utf8_general_ci'");
  		if (!$connect){
  			die ("<b>Ќет коннекта с базой данных, проверьте правильность имени пользовател€ и парол€!</b>");
  		}
?>