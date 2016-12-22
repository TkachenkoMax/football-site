<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Spain </title>
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
		<div class="category-head" id="esp-head">
			<div class="clubs-list-back">
				<div class="clubs-list">
					<img class="club-logo-in-list" id="alaves" src="images/logos/spain/alaves.png"/ title="Алавес">
					<img class="club-logo-in-list" id="athletic" src="images/logos/spain/athletic.png"/ title="Атлетик Бильбао">
					<img class="club-logo-in-list" id="atletico" src="images/logos/spain/atletico.png"/ title="Атлетико Мадрид">
					<img class="club-logo-in-list" id="barcelona" src="images/logos/spain/barcelona.png"/ title="Барселона">
					<img class="club-logo-in-list" id="betis" src="images/logos/spain/betis.png"/ title="Бетис">
					<img class="club-logo-in-list" id="celta" src="images/logos/spain/celta.png"/ title="Сельта">
					<img class="club-logo-in-list" id="deportivo" src="images/logos/spain/deportivo.png"/ title="Депортиво">
					<img class="club-logo-in-list" id="eibar" src="images/logos/spain/eibar.png"/ title="Эйбар">
					<img class="club-logo-in-list" id="espanyol" src="images/logos/spain/espanyol.png"/ title="Эспаньол">
					<img class="club-logo-in-list" id="granada" src="images/logos/spain/granada.png"/ title="Гранада">
					<img class="club-logo-in-list" id="laspalmas" src="images/logos/spain/laspalmas.png"/ title="Лас Пальмас">
					<img class="club-logo-in-list" id="leganes" src="images/logos/spain/leganes.png"/ title="Леганес">
					<img class="club-logo-in-list" id="malaga" src="images/logos/spain/malaga.png"/ title="Малага">
					<img class="club-logo-in-list" id="osasuna" src="images/logos/spain/osasuna.png"/ title="Осасуна">
					<img class="club-logo-in-list" id="realm" src="images/logos/spain/realm.png"/ title="Реал Мадрид">
					<img class="club-logo-in-list" id="reals" src="images/logos/spain/reals.png"/ title="Реал Сосьедад">
					<img class="club-logo-in-list" id="sevilla" src="images/logos/spain/sevilla.png"/ title="Севилья">
					<img class="club-logo-in-list" id="sporting" src="images/logos/spain/sporting.png"/ title="Спортинг Хихон">
					<img class="club-logo-in-list" id="valencia" src="images/logos/spain/valencia.png"/ title="Валенсия">
					<img class="club-logo-in-list" id="villarreal" src="images/logos/spain/villarreal.png"/ title="Вильярреал">
				</div>
			</div>
		</div>
		<div class="category-left">
			<span class="additional-text">Лента новостей</span>
			<div class="list-of-news">
				<?php 
				$news = mysqli_query($connect,"SELECT id_news, title, description, date, photo FROM news WHERE category = 'Испания' ORDER BY id_news DESC");
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
					<?php if($count!=0) { ?> <a href="spain.php?page=1">На первую</a> <?php } ?>
					<?php if($page!=1) { ?> <a href="spain.php?page=<?php echo $page-1 ?>"><</a><?php } ?>
					<?php if($page+1<=ceil($count/3)) { ?> <a href="spain.php?page=<?php echo $page+1 ?>">></a><?php } ?>
					<?php if($count!=0) { ?> <a href="spain.php?page=<?php echo ceil($count/3) ?>">На последнюю</a> <?php } ?>
				</div>
			</div>
		</div>
		<?php require('spain_tables.php') ?>
	</div>
	
	<?php require('./footer.php') ?>
	
	<script src="js/show.js"></script>
	<script src="js/clubs.js"></script>
</body>
</html>