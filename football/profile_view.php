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
	
	<?php $id = $_GET['id']; ?>
    <?php 
		$result = mysqli_query($connect, "SELECT * FROM users WHERE id_user = $id");
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>
	
	<img class="show" src="images/down.png" width="50px" height="50px"/>
		<div>
			<div class="username">
				<span><?php echo $user["login"]; ?></span>
			</div>
		</div>
		<div class="main-info-block">
			<img src="images/user.png" alt="avatar"/>
			<div class="main-info">
				<span class="info-title">Информация</span>
				<div class="main-info-content">
				<div>
					<span><b>Дата регистрации: </b><?php echo $user["reg_date"]; ?></br></span>
					<span><b>Имя: </b><?php 
					if ($user["name"]=="") 
						echo "Не заполнено";
					else
						echo $user["name"]; ?></br></span>
					<span><b>Пол: </b><?php 
					if ($user["sex"]=="") 
						echo "Не заполнено";
					else
						echo $user["sex"]; ?></br></span>
					<span><b>Откуда: </b><?php 
					if ($user["city"]=="") 
						echo "Не заполнено";
					else
						echo $user["city"]; ?></br></span>
				</div>
				</div>
			<div>
		</div>
		</div>
		<div class="additional-info">
			<span class="info-title">О себе</span>
			<div class="additional-info-content">
			    <p><?php 
					if ($user["about"]=="") 
						echo "Не заполнено";
					else
						echo $user["about"]; ?></p>
			</div>
			<span class="info-title">Любимые спортсмены</span>
			<div class="additional-info-content">
			    <p><?php 
					if ($user["fav_sportsmen"]=="") 
						echo "Не заполнено";
					else
						echo $user["fav_sportsmen"]; ?></p>
			</div>
			<span class="info-title">Любимые клубы</span>
			<div class="additional-info-content">
				<p><?php 
					if ($user["fav_clubs"]=="") 
						echo "Не заполнено";
					else
						echo $user["fav_clubs"]; ?></p>
			</div>
		</div>
	</div>
	
	<?php require('./footer.php') ?>
	<script src="js/show.js"></script>
</body>
</html>