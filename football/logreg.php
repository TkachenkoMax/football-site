<div class="regBIG">
	</div>
		<div class="regIN">
			<div class="contentreg">
				<div class="info">
					Преимущества регистрации на сайте:
					<ul>
						<li>Общение с тысячами футбольных болельщиков</li>
						<li>Участие в спортивных играх (фентези, прогнозисты) и возможность выиграть призы</li>
						<li>Общение с журналистами сайта в конференциях</li>
						<li>Возможность получить e-mail на домене @football-site.ua</li>
					</ul>
				</div>
			<hr/>
			<h1>РЕГИСТРАЦИЯ</h1>
			<form class="logreg" method="post" action="signup_func.php">
				<input type="email" name="e-mail" placeholder="Адрес электронной почты"/>
				<input type="text" name="login" placeholder="Логин"/>
				<input type="password" name="pass" placeholder="Пароль"/>
				<input type="password" name="confirmpass" placeholder="Подтвердите пароль"/>
				<input type="submit" class="submit" name="submit" value="Зарегистрироваться"/>
			</form>
			<div class="gotologin">Я уже зарегистрирован, впустите!</div>
			</div>
		</div>

		<div class="logIN">
			<h1>ВХОД В АККАУНТ</h1>
			<form class="logreg" method="post" action="login_func.php">
				<input type="email" name="email" placeholder="Адрес электронной почты"/>
				<input type="password" name="password" placeholder="Пароль"/>
				<input type="submit" name="submit" class="submit" value="Войти"/>
			</form>
			<div class="gotoreg">Нет аккаунта? Зарегистрироваться!</div>
		</div>