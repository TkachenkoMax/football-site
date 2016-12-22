<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Categories </title>
</head>
<body>
<?php require('./header.php') ?>
<?php require('./menu.php') ?>
<?php require('./logreg.php') ?>
	
	<div class="categories-main">
		<a href="england.php?page=1"><div class="category">
			<img src="images/categories/eng.jpg"/>
			<span>Англия</span>
		</div>
		</a>
		<a href="germany.php?page=1"><div class="category">
			<img src="images/categories/ger.jpg"/>
			<span>Германия</span>
		</div>
		</a>
		<a href="spain.php?page=1"><div class="category">
			<img src="images/categories/esp.jpg"/>
			<span>Испания</span>
		</div>
		</a>
		<a href="championsleague.php?page=1"><div class="category">
			<img src="images/categories/cl.jpg"/>
			<span>Лига чемпионов</span>
		</div>
		</a>
		<a href="europaleague.php?page=1"><div class="category">
			<img src="images/categories/el.jpg"/>
			<span>Лига Европы</span>
		</div>
		</a>
	</div>
	
	<?php require('./footer.php') ?>
</body>
</html>