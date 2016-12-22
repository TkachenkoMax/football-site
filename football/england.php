<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> England </title>
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
	<?php require('./england_clubs_info.php') ?>
	<img class="show" src="images/down.png" width="50px" height="50px"/>
		<div class="category-head" id="eng-head">
			<div class="clubs-list-back">
				<div class="clubs-list">
					<img class="club-logo-in-list" id="arsenal" src="images/logos/england/arsenal.png"/ title="Арсенал">
					<img class="club-logo-in-list" id="bournemouth" src="images/logos/england/bournemouth.png"/ title="Борнмут">
					<img class="club-logo-in-list" id="burnley" src="images/logos/england/burnley.png"/ title="Бернли">
					<img class="club-logo-in-list" id="chelsea" src="images/logos/england/chelsea.png"/ title="Челси">
					<img class="club-logo-in-list" id="crystal_palace" src="images/logos/england/crystal palace.png"/ title="Кристал Пэлас">
					<img class="club-logo-in-list" id="everton" src="images/logos/england/everton.png"/ title="Эвертон">
					<img class="club-logo-in-list" id="hull" src="images/logos/england/hull.png"/ title="Халл Сити">
					<img class="club-logo-in-list" id="leicester" src="images/logos/england/leicester.png"/ title="Лестер Сити">
					<img class="club-logo-in-list" id="liverpool" src="images/logos/england/liverpool.png"/ title="Ливерпуль">
					<img class="club-logo-in-list" id="man_city" src="images/logos/england/man city.png"/ title="Манчестер Сити">
					<img class="club-logo-in-list" id="man_united" src="images/logos/england/man united.png"/ title="Манчестер Юнайтед">
					<img class="club-logo-in-list" id="middlesbrough" src="images/logos/england/middlesbrough.png"/ title="Мидлсбро">
					<img class="club-logo-in-list" id="southampton" src="images/logos/england/southampton.png"/ title="Саутгемптон">
					<img class="club-logo-in-list" id="stoke" src="images/logos/england/stoke.png"/ title="Сток Сити">
					<img class="club-logo-in-list" id="sunderland" src="images/logos/england/sunderland.png"/ title="Сандерленд">
					<img class="club-logo-in-list" id="swansea" src="images/logos/england/swansea.png"/ title="Суонси">
					<img class="club-logo-in-list" id="tottenham" src="images/logos/england/tottenham.png"/ title="Тоттенхэм">
					<img class="club-logo-in-list" id="watford" src="images/logos/england/watford.png"/ title="Уотфорд">
					<img class="club-logo-in-list" id="wba" src="images/logos/england/wba.png"/ title="Вэст Бромвич">
					<img class="club-logo-in-list" id="west_ham" src="images/logos/england/west ham.png"/ title="Вест Хэм">
				</div>
			</div>
		</div>
		<div class="category-left">
			<span class="additional-text">Лента новостей</span>
			<div class="list-of-news">
			<?php 
				$news = mysqli_query($connect,"SELECT id_news, title, description, date, photo FROM news WHERE category = 'Англия' ORDER BY id_news DESC");
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
					<?php if($count!=0) { ?> <a href="england.php?page=1">На первую</a> <?php } ?>
					<?php if($page!=1) { ?> <a href="england.php?page=<?php echo $page-1 ?>"><</a><?php } ?>
					<?php if($page+1<=ceil($count/3)) { ?> <a href="england.php?page=<?php echo $page+1 ?>">></a><?php } ?>
					<?php if($count!=0) { ?> <a href="england.php?page=<?php echo ceil($count/3) ?>">На последнюю</a> <?php } ?>
				</div>
			</div>
		</div>
		<?php require('england_tables.php') ?>
	</div>
	
	<?php require('./footer.php') ?>
	
	<script src="js/show.js"></script>
	<script src="js/clubs.js"></script>
</body>
</html>