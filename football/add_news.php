<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Create News </title>	
</head>
<body>
	<?php 
	session_start();
	if($_SESSION["is_admin"]==0) header( 'Location:access_denied.php' );
	require_once('connect.php'); 
	?> 
	
	<?php 
		require('admin_panel_head.php');
	?>
	
	<div class="add-news-main">
		<form class="post-form" action="add_news_func.php" method="post">
			<div class="add-news-left">
				<div>Заголовок:</div>
				<input type="text" name="title" maxlength="50" required></input>
				<div>Краткое описание:</div>
				<textarea id="short_descr" maxlength="100" name="descr" required></textarea>
				<div>Категория</div>
				<select name="category">
					<option>Англия</option>
					<option>Германия</option>
					<option>Испания</option>
					<option>Лига чемпионов</option>
					<option>Лига Европы</option>
				</select>
				<div>Фото:</div>
				<input type="text" name="photo" required></input>
			</div>
			<div class="add-news-right">
				<div>Текст новости:</div>
				<textarea id="news_text" maxlength="2000" name="text" required></textarea>
			</div>
			<div class="send-news-but">
				<input type="submit" name="submit" value="Отправить"></input>
			</div>
		</form>
	</div>
</body>
</html>