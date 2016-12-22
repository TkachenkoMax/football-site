<?php require_once('./connect.php') ?>
<?php 
	session_start(); 
?>

<div class="header">
		<a href="index.php">
			<div class="logo">
				<img src="images/logo.png" alt="logo" width="75px" height="75px"/>
			</div>
			<div class="sitename">
				<span>Football-site<span>
			</div>
		</a>
		
		<?php if(! isset($_SESSION["id_user"])) { ?>
			<div class="log-reg-main">
				<div class="log-reg-icon">
					<img src="images/login.png" alt="login" width="70px" height="60px"/>
				</div>	
				<div class="log-reg-buttons">
					<div id="login"><span>Вход</span></div>
					<div id="registration"><span>Регистрация</span></div>
				</div>
			</div>
		<?php } else { ?>
			<div class="user-logged">
				<a href="userpage.php"><div class="user-login">
					<img src="images/user.png"/ width="50px", height="50px">
					<div class="hello"><?php echo "Привет, ", $_SESSION["login"], "!";?></div>
				</div></a>
				<div class="user-buttons">
					<?php if ($_SESSION["is_admin"]==1){ ?><a href="users_list.php"><div id="users-but"><span>Пользователи</span></div></a>
					<a href="news_list.php"><div id="news-but"><span>Новости</span></div></a> <?php } ?>
					<a href="logout_func.php"><div id="exit-but"><span>Выход</span></div></a>
				</div>
			</div>
		<?php } ?>
		
	</div>