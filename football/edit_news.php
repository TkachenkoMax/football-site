<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Edit News </title>	
</head>
<body>
	<?php 
	session_start();
	require_once('connect.php'); 
	if($_SESSION["is_admin"]==0) header( 'Location:access_denied.php' );
	$id_article = $_GET['article'];
	$result = mysqli_query($connect, "SELECT * FROM news WHERE id_news = $id_article");
    $news = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?> 
	
	<?php 
		require('admin_panel_head.php');
	?>
	
	<div class="add-news-main">
		<form class="post-form" action="edit_news_func.php?article=<?php echo $id_article; ?>" method="post">
			<div class="add-news-left">
				<div>Заголовок:</div>
				<input type="text" name="title" maxlength="50" value="<?php echo $news['title']; ?>" required></input>
				<div>Краткое описание:</div>
				<textarea id="short_descr" maxlength="100" name="descr" required><?php echo $news['description']; ?></textarea>
				<div>Категория</div>
				<select name="category">
					<option>Англия</option>
					<option>Германия</option>
					<option>Испания</option>
					<option>Лига чемпионов</option>
					<option>Лига Европы</option>
				</select>
				<div>Фото:</div>
				<input type="text" name="photo" value="<?php echo $news['photo']; ?>" required></input>
			</div>
			<div class="add-news-right">
				<div>Текст новости:</div>
				<textarea id="news_text" maxlength="2000" name="text" required><?php echo $news['text']; ?></textarea>
			</div>
			<div class="send-news-but">
				<input type="submit" name="submit" value="Отправить"></input>
			</div>
		</form>
	</div>
</body>
</html>