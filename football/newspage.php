<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> News Page </title>
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
	
	<?php require_once('connect.php') ?>
	<?php $article = $_GET['article']; ?>
	<?php 
		$result = mysqli_query($connect, "SELECT * FROM news WHERE id_news = $article");
		$news = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$var = $news['author_id'];
		$result = mysqli_query($connect, "SELECT login FROM users WHERE id_user = $var");
		$news_author = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>
	
	<div class="news-main">
	<img class="show" src="images/down.png" width="50px" height="50px"/>
		<div class="image-block">
			<img src=<?php echo $news['photo'] ?> alt="photo"/>
			<div class="news-title"><?php echo $news['title'] ?></div>
		</div>
		<div class="news-text">
			<div class="main-idea">
				<?php echo $news['description'] ?>
			</div>	
<p><?php echo $news['text'] ?></p>
		</div>
		
		<div class="news-author">
			<img class="round" src="images/user.png" alt="face" width="100px" height="100px"/>
			<div class="name-networks">
				<p><a href="profile_view.php?id=<?php echo $var ?>"> <?php echo $news_author['login'] ?></a></p>
			</div>
		</div>
		<div class="date"><?php echo $news['date'] ?></div>
	</div>
	
	<?php require('./footer.php') ?>
	
	<script src="js/show.js"></script>
</body>
</html>