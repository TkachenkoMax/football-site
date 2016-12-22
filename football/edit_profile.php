<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Edit Profile </title>
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
	
	<form name="userinfo" method="post" action="edit_profile_func.php">
	<div class="userpage-big">
	<?php if(! isset($_SESSION["id_user"])) { ?>
       <h2> You are not logged in </h2>
	<?php } ?>
	<img class="show" src="images/down.png" width="50px" height="50px"/>
		<span class="username"><?php echo $_SESSION["login"] ?></span>
		<div class="main-info-block">
			<div>
				<img src="images/user.png" alt="avatar"/>
			</div>
			<div class="main-info">
				<span class="info-title">Информация</span>
				<div class="main-info-content">
				<div>
					<span><b>Дата регистрации: </b>13 декабря 2016</br></span>
					<span class="edit-info"><b>Имя:</b> <input type="text" name="name" value="<?php echo $_SESSION['user_name'] ?>"/></span>
					<span class="edit-info"><b>Пол: </b><input type="text" name="sex" value="<?php echo $_SESSION['user_sex'] ?>"/></span>
					<span class="edit-info"><b>Откуда:</b> <input type="text" name="city" value="<?php echo $_SESSION['user_city'] ?>"/></span>
				</div>
				</div>
			<div>
		</div>
		</div>
		<div>
			<div class="additional-info">
				<span class="info-title">О себе</span>
				<div class="additional-info-content">
					<textarea name="about-me" class="additional-edit-info" maxlength=256><?php echo $_SESSION['user_about'] ?></textarea>
				</div>
				<span class="info-title">Любимые спортсмены</span>
				<div class="additional-info-content">
					<textarea name="fav_sports" class="additional-edit-info" maxlength=256><?php echo $_SESSION['user_fav_sportsmen'] ?></textarea>
				</div>
				<span class="info-title">Любимые клубы</span>
				<div class="additional-info-content">
					<textarea name="fav_clubs" class="additional-edit-info" maxlength=256><?php echo $_SESSION['user_fav_clubs'] ?></textarea>
				</div>
			</div>
			<div class="change-button">
				<input type="submit" name="save-changes" value="Сохранить"/>
			</div>
		</div>
	</div>
	</form>
	
	<?php require('./footer.php') ?>
	<script src="js/show.js"></script>
</body>
</html>