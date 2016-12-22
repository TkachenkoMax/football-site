<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Germany </title>
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
		<div class="category-head" id="ger-head">
			<div class="clubs-list-back">
				<div class="clubs-list">
					<img class="club-logo-in-list" id="augsburg" src="images/logos/germany/augsburg.png"/ title="Аугсбург">
					<img class="club-logo-in-list" id="bayer" src="images/logos/germany/bayer.png"/ title="Байер Леверкузен">
					<img class="club-logo-in-list" id="bayern" src="images/logos/germany/bayern.png"/ title="Бавария">
					<img class="club-logo-in-list" id="borussiad" src="images/logos/germany/borussiad.png"/ title="Боруссия Дортмунд">
					<img class="club-logo-in-list" id="borussiam" src="images/logos/germany/borussiam.png"/ title="Боруссия Менхенгладбах">
					<img class="club-logo-in-list" id="darmstadt" src="images/logos/germany/darmstadt.png"/ title="Дармштадт">
					<img class="club-logo-in-list" id="eintracht" src="images/logos/germany/eintracht.png"/ title="Айнтрахт">
					<img class="club-logo-in-list" id="freiburg" src="images/logos/germany/freiburg.png"/ title="Фрайбург">
					<img class="club-logo-in-list" id="hamburg" src="images/logos/germany/hamburg.png"/ title="Гамбург">
					<img class="club-logo-in-list" id="hertha" src="images/logos/germany/hertha.png"/ title="Герта">
					<img class="club-logo-in-list" id="hoffenheim" src="images/logos/germany/hoffenheim.png"/ title="Хоффенхайм">
					<img class="club-logo-in-list" id="ingolstadt" src="images/logos/germany/ingolstadt.png"/ title="Ингольштадт">
					<img class="club-logo-in-list" id="koln" src="images/logos/germany/koln.png"/ title="Кёльн">
					<img class="club-logo-in-list" id="mainz" src="images/logos/germany/mainz.png"/ title="Майнц">
					<img class="club-logo-in-list" id="rbleipzig" src="images/logos/germany/rbleipzig.png"/ title="РБ Лейпциг">
					<img class="club-logo-in-list" id="schalke" src="images/logos/germany/schalke.png"/ title="Шальке">
					<img class="club-logo-in-list" id="werder" src="images/logos/germany/werder.png"/ title="Вердер">
					<img class="club-logo-in-list" id="wolfsburg" src="images/logos/germany/wolfsburg.png"/ title="Вольфсбург">
				</div>
			</div>
		</div>
		<div class="category-left">
			<span class="additional-text">Лента новостей</span>
			<div class="list-of-news">
				<?php 
				$news = mysqli_query($connect,"SELECT id_news, title, description, date, photo FROM news WHERE category = 'Германия' ORDER BY id_news DESC");
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
					<?php if($count!=0) { ?> <a href="germany.php?page=1">На первую</a> <?php } ?>
					<?php if($page!=1) { ?> <a href="germany.php?page=<?php echo $page-1 ?>"><</a><?php } ?>
					<?php if($page+1<=ceil($count/3)) { ?> <a href="germany.php?page=<?php echo $page+1 ?>">></a><?php } ?>
					<?php if($count!=0) { ?> <a href="germany.php?page=<?php echo ceil($count/3) ?>">На последнюю</a> <?php } ?>
				</div>
			</div>
		</div>
		<?php require('germany_tables.php') ?>
	</div>
	
	<?php require('./footer.php') ?>
	
	<script src="js/show.js"></script>
	<script src="js/clubs.js"></script>
</body>
</html>