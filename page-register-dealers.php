<?php include 'header.php'; ?>
		<div class="account-page-wrapper clearfix">
			<a href="javascript:history.go(-1)" class="mobile-btn-back"></a>
			<div class="account-page-left-col">
				<a href="index.php" class="logo">
					<img src="img/elements/logotype.svg" alt="Manezh">
				</a>
				<img src="img/image_personal_profile.jpg" alt="Manezh">
			</div>
			<div class="account-page-right-col register-new-user-page">
				<a href="javascript:history.go(-1)" class="back-link"></a>
				<div class="account-content-wrapper">
					<h1>РЕГИСТРАЦИЯ ДИЛЕРА В СИСТЕМЕ MANEZH</h1>
					<span class="register-subtitle">Заполните следующую информацию</span>
					<div class="register-form-wrapper clearfix">
						<form action="success-registration-message.php" method="POST" id="register-dealers-form">
							<div class="company-info-block">
								<div class="form-input-wrapper mobile-gradient">
									<input type="text" name="dealer-name" id="dealer-name">
									<label for="dealer-name">Название компании</label>
									<span class="incorrect-mssg">Введите название компании</span>
								</div>
								<div class="form-input-wrapper">
									<div class="select-param-wrapper">
										<select name="country-select" id="country-select">
											<option value="" disabled selected></option>
											<option value="Украина">Украина</option>
											<option value="Канада">Беларусь</option>
										</select>
										<label for="country-select">Страна</label>
									</div>
								</div>
								<div class="form-input-wrapper">
									<div class="select-param-wrapper">
										<select name="city-select" id="city-select">
											<option value="" disabled selected></option>
											<option value="Киев">Киев</option>
											<option value="Одесса">Одесса</option>
											<option value="Днепр">Днепр</option>
										</select>
										<label for="city-select">Город</label>
									</div>
								</div>							
								<div class="form-input-wrapper mobile-gradient">
									<input type="text" name="dealer-address" id="dealer-address">
									<label for="dealer-address">Адрес</label>
								</div>
							</div>
							<div class="contacts-info-block">
								<div class="form-input-wrapper mobile-gradient">
									<input type="email" name="dealer-email" id="dealer-email">
									<label for="dealer-email">Email</label>
									<span class="incorrect-mssg">Неправильно введенный Email</span>
								</div>
								<div class="form-input-wrapper">
									<input type="tel" name="dealer-tel" id="dealer-tel">
									<label for="dealer-tel">Телефон</label>
									<span class="incorrect-mssg">Неправильно введенный телефон</span>
								</div>
								<div class="form-input-wrapper">
									<input type="text" name="dealer-site" id="dealer-site">
									<label for="dealer-site">Сайт</label>
								</div>								
							</div>
							<div class="pass-info-block">
								<div class="form-input-wrapper">
									<input type="password" name="dealer-password" id="dealer-password">
									<label for="dealer-password">Пароль</label>
									<span class="incorrect-mssg">Неправильно введенный пароль</span>
								</div>
								<div class="form-input-wrapper">
									<input type="password" name="dealer-confirm-password" id="dealer-confirm-password">
									<label for="dealer-confirm-password">Повторите пароль</label>
									<span class="incorrect-mssg">Пароли не совпадают</span>
								</div>
							</div>							
							<button type="submit" class="login-register-btn">Зарегестрироваться</button>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php include 'footer.php'; ?>		
