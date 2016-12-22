<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Userpage </title>
	<style type="text/css">
		.header{
			display:none;
		}
		.menu{
			display:none;
		}
    </style>	
</head>
<body>
	<?php require('./header.php') ?>
	<?php require('./menu.php') ?>
	<?php require('./logreg.php') ?>
	
	<div class="userpage-big">
	<img class="show" src="images/down.png" width="50px" height="50px"/>
		<div>
			<div class="username">
				<span><?php echo $_SESSION["login"]; ?></span>
				<a href="edit_profile.php"><img src="images/edit.png" width="50px" height="50px" title="Изменить профиль"/></a>
			</div>
		</div>
		<div class="main-info-block">
			<img src="images/user.png" alt="avatar"/>
			<div class="main-info">
				<span class="info-title">Информация</span>
				<div class="main-info-content">
				<div>
					<span><b>Дата регистрации: </b><?php echo $_SESSION["user_reg_date"]; ?></br></span>
					<span><b>Имя: </b><?php 
					if ($_SESSION["user_name"]=="") 
						echo "Не заполнено";
					else
						echo $_SESSION["user_name"]; ?></br></span>
					<span><b>Пол: </b><?php 
					if ($_SESSION["user_sex"]=="") 
						echo "Не заполнено";
					else
						echo $_SESSION["user_sex"]; ?></br></span>
					<span><b>Откуда: </b><?php 
					if ($_SESSION["user_city"]=="") 
						echo "Не заполнено";
					else
						echo $_SESSION["user_city"]; ?></br></span>
				</div>
				</div>
			<div>
		</div>
		</div>
		<div class="additional-info">
			<span class="info-title">О себе</span>
			<div class="additional-info-content">
			    <p><?php 
					if ($_SESSION["user_about"]=="") 
						echo "Не заполнено";
					else
						echo $_SESSION["user_about"]; ?></p>
			</div>
			<span class="info-title">Любимые спортсмены</span>
			<div class="additional-info-content">
			    <p><?php 
					if ($_SESSION["user_fav_sportsmen"]=="") 
						echo "Не заполнено";
					else
						echo $_SESSION["user_fav_sportsmen"]; ?></p>
			</div>
			<span class="info-title">Любимые клубы</span>
			<div class="additional-info-content">
				<p><?php 
					if ($_SESSION["user_fav_clubs"]=="") 
						echo "Не заполнено";
					else
						echo $_SESSION["user_fav_clubs"]; ?></p>
			</div>
		</div>
	</div>
	
	<?php require('./footer.php') ?>
	<script src="js/show.js"></script>
</body>
</html>