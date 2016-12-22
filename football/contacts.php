<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css">
	<title> Contacts </title>
</head>
<body>
<?php require('./header.php') ?>
<?php require('./menu.php') ?>
<?php require('./logreg.php') ?>
<div class="contacts-main">
	<div class="contacts-map">
		<div>
			<p class="contacts-title">Как нас найти</p>
		</div>
		<div>
			<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1282.6086925693712!2d36.17966430128329!3d49.988533727044874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1478082748599" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="contacts-info">
		<div>
			<p class="contacts-title">Информация</p>
		</div>
		<div class="contacts-list">
			<span><b>Адрес</b>: 61098, Харьков, пер. Чередниченковский, д. 7, кв. 49</span>
			<span><b>Телефон</b>: +38(095)683-66-05<br/></span>
			<span><b>E-mail</b>: info@football-site.ua<br/></span>
			<span><b>Отдел маркетинга</b>: marketing@football-site.ua<br/></span>
			<span><b>Отдел продаж</b>: sales@football-site.ua<br/></span>
			<span><b>Если вы хотите работать в Football-site</b>: jobs@football-site.ua<br/></span>
		</div>
	</div>
	<div class="contacts-feedback">
		<div>
			<p class="contacts-title">Обратная связь</p>
		</div>
		<div class="feedback-form">
			<form method="post" action="feedback_func.php">
				<div id="feedback-nte">
					<input type="text" placeholder="Имя" name="name"></input>
					<input type="phone" placeholder="Телефон" name="phone"></input>
					<input type="email" placeholder="E-mail" name="email"></input>
				</div>
				<div id="feedback-t">
					<select name="type">
						<option>Жалоба</option>
						<option>Предложение</option>
						<option>Заявка</option>
					</select>
				</div>
				<div id="feedback-m">
					<textarea placeholder="Текст сообщения" maxlength=256 name="message"></textarea>
				</div>
				<div id="feedback-f">
					<input type="file" name="file"/>
				</div>
				<div id="feedback-s">
					<input type="submit" name="submit"></input>
				</div>
			</form>
		</div>
	</div>
</div>
<?php require('./footer.php') ?>	
</body>
</html>