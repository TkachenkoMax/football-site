<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> News List </title>	
	<style type="text/css">
		#admin-news-but{
			color:red;
		}
    </style>	
</head>
<body>
	<?php 
	session_start();
	require_once('connect.php'); 

	if($_SESSION["is_admin"]==0) header( 'Location:access_denied.php' );
	
	$result = mysqli_query($connect,"SELECT id_news, title, category, author_id, date FROM news");
	?> 
	
	<?php 
		require('admin_panel_head.php');
	?>
	
	<div class="admin-news-list">
		<div class="create-news-button">
			<div><a href="add_news.php">Добавить новость</a></div>
		</div>
		<table class="news-table">
		<thead>
			<tr>
				<td>#</td>
				<td>Заголовок</td>
				<td>Категория</td>
				<td>Автор</td>
				<td>Дата</td>
				<td>Удалить</td>
				<td>Ред.</td>
			</tr>
		</thead>

		<?php while($news = mysqli_fetch_array($result)) { ?>
			<tr> 
				<td> 
				<?php echo $news['id_news']; ?> 
				</td>
				<td> <a href="newspage.php?article=<?php echo $news['id_news']; ?>"> <?php echo $news['title']; ?> </a> 
				</td>
				<td> <?php echo $news['category']; ?> </td>
				<?php 
					$author_id = $news['author_id'];
					$result1 = mysqli_query($connect,"SELECT login FROM users WHERE id_user=$author_id");
					$news_author = mysqli_fetch_array($result1)
				?> 
				<td> <?php echo $news_author['login']; ?> </td>
				<td> <?php echo $news['date']; ?> </td>
				<td> <a href="delete_news_func.php?article=<?php echo $news['id_news']; ?>"> <div id="delete-button"</a> </td>
				<td> <a href="edit_news.php?article=<?php echo $news['id_news']; ?>"> <div id="edit-button"</a> </td>
			</tr>
		<?php } ?>
		
		</table>
	</div>
</body>
</html>