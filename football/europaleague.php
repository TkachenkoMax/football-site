<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Europa League </title>
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
	<?php require('connect.php') ?>
	<?php $page = $_GET['page'];?>
	
	<div class="category-big">
	<img class="show" src="images/down.png" width="50px" height="50px"/>
		<div class="category-head" id="el-head">
		</div>
		<div class="category-left">
			<span class="additional-text">Лента новостей</span>
			<div class="list-of-news">
				<?php 
				$news = mysqli_query($connect,"SELECT id_news, title, description, date, photo FROM news WHERE category = 'Лига Европы' ORDER BY id_news DESC");
				$count = mysqli_num_rows($news);
				if($page>ceil($count/3)) $page=1;
				for($i=($page-1)*3; $i<($page)*3; $i=$i+1){
					mysqli_data_seek($news, $i);
					$rown = mysqli_fetch_array($news, MYSQLI_ASSOC);
					
					if($rown['id_news']=="") break;
			?>
				<div class="news">
					<img class="category-news-photo" src="<?php echo $rown['photo'] ?>"/>
					<a href="newspage.php?article=<?php echo $rown['id_news'] ?>"><span class="category-news-title"><?php echo $rown['title'] ?></span></a>
					<span class="category-news-date"><?php echo $rown['date'] ?></span>
					<p class="category-news-descr"><?php echo $rown['description'] ?></p>
				</div>
				
				<?php } ?>
				<div class="category-controls">
					<?php if($count!=0) { ?> <a href="europaleague.php?page=1">На первую</a> <?php } ?>
					<?php if($page!=1) { ?> <a href="europaleague.php?page=<?php echo $page-1 ?>"><</a><?php } ?>
					<?php if($page+1<=ceil($count/3)) { ?> <a href="europaleague.php?page=<?php echo $page+1 ?>">></a><?php } ?>
					<?php if($count!=0) { ?> <a href="europaleague.php?page=<?php echo ceil($count/3) ?>">На последнюю</a> <?php } ?>
				</div>
			</div>
		</div>
		<?php require('europaleague_tables.php') ?>
	</div>
	
	<?php require('./footer.php') ?>
	
	<script src="js/show.js"></script>
</body>
</html>