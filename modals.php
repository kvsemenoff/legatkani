<?php require_once('includes/header.php'); ?>
<div class="n-wrapper">
	<div class="n-header">
		<?php require_once('includes/header-top.php'); ?>
		<?php require_once('includes/header_bottom.php'); ?>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="fon">
				<div class="js-window" id="js-form1">
				<span class="modal-close"></span>
					<h2 class="h3 modal-h3">Обратный звонок</h2>
					<form action="#" method="post">	
						<div class="input input_theme_rosa	qustion-input-margin">
							<input type="text" class="input__control modal-input" placeholder="Имя" name="uname" required>
						</div>
						<div class="input input_theme_rosa	qustion-input-margin">
							<input type="tel" class="input__control js-phone modal-input" name="phone" placeholder="+7(___)___-__-__" required>
						</div>
						<input type="submit" name="submit" class="submit modal-submit" value="Заказать звонок">
					</form>
				</div>
				<br><br>
				<div class="js-window" id="js-form2">
				<span class="modal-close"></span>
					<h2 class="h3 modal-h3">подписаться<br>
						на новости</h2>
						<form action="#" method="post">	
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="text" class="input__control modal-input" placeholder="Ваше Имя" name="uname" required>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="text" class="input__control modal-input" placeholder="Ваш e-mail" name="email" required>
							</div>
							<input type="submit" name="submit" class="submit modal-submit submit-podpis" value="Подписаться">
						</form>
					</div>
					<br><br>
					<div class="js-window" id="js-form3">
					<span class="modal-close"></span>
						<h2 class="h3 modal-h3">Авторизация</h2>
						<form action="#" method="post">	
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="email" class="input__control modal-input modal-auth" placeholder="Ваш e-mail" name="email" required>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="text" class="input__control modal-input modal-auth" placeholder="Ваш пароль" name="password" required>
							</div>
							<a href="#" class="modal-across">Напомнить пароль через E-mail</a>
							<input type="submit" name="submit" class="submit modal-submit submit-sign" value="Войти">
						</form>
					</div>
					<br><br>
					<div class="js-window" id="js-form4">
					<span class="modal-close"></span>
						<h2 class="h3 modal-h3">регистрация</h2>
						<form action="#" method="post">	
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="text" class="input__control modal-input" placeholder="Фамилия*" name="firstname" required>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="text" class="input__control modal-input" placeholder="Имя*" name="uname" required>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="text" class="input__control modal-input" placeholder="Отчество*" name="middlename" required>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="email" class="input__control modal-input" placeholder="E-mail*" name="email" required>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="tel" class="input__control modal-input" placeholder="+7(___)___-__-__" name="phone" required>
							</div>
							<div class="input">
							<select class="form-select input__control qustion-input-margin modal-input modal-align" 
							id="type">
									<option value="">Город доставки</option>
									<option value="">Москва</option>
									<option value="">Санкт-Петербург</option>
								</select>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="text" class="input__control modal-input" placeholder="Адрес доставки" name="address" required>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="password" class="input__control modal-input modal-auth" placeholder="Пароль*" name="password" required>
							</div>
							<div class="input input_theme_rosa	qustion-input-margin">
								<input type="password" class="input__control modal-input modal-auth" placeholder="Повторите пароль*" name="password2" required>
							</div>
							<input type="submit" name="submit" class="submit modal-submit" value="Зарегистрироваться">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="n-footer">
			<?php require_once('includes/footer.php'); ?>
		</div>
	</div>
</body>
</html>
