<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css">
	<title> Start Page </title>
</head>
<body>
<?php require('./header.php') ?>
<?php require('./menu.php') ?>
<?php require('./logreg.php') ?>
<?php 
	require_once('connect.php'); 
		
	$result = mysqli_query($connect,"SELECT id_news, title, date FROM news ORDER BY id_news DESC LIMIT 10");
?> 

<div class="start-main">
	<?php require('./sidebar.php') ?>
	<?php require('./slider.php') ?>
	<div class="content">
		<div class="last-news">Последние новости футбола</div>
		<?php while($news = mysqli_fetch_array($result)) { ?>
			<div class="startpage-news">
				<span id="start-news-date"><?php echo $news['date']; ?> </span> 
				<a href="newspage.php?article=<?php echo $news['id_news']; ?>"><span id="start-news-title"><?php echo $news['title']; ?> </span></a>
			</div>
		<?php } ?>
	</div>
</div>
<?php require('./footer.php') ?>
<script src="js/slider.js"></script>	
</body>
</html>