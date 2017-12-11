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
					<h1>РЕГИСТРАЦИЯ ПРЕДСТАВИТЕЛЬСТВА В СИСТЕМЕ MANEZH</h1>
					<span class="register-subtitle">Заполните следующую информацию</span>
					<div class="register-form-wrapper clearfix">
						<form action="success-registration-message.php" method="POST" id="register-agency-form">
							<div class="company-info-block">
								<div class="form-input-wrapper">
									<div class="select-param-wrapper">
										<select name="country-select" id="country-select">
											<option value="" disabled selected></option>
											<option value="Украина">Украина</option>
											<option value="Канада">Белорусь</option>
										</select>
										<label for="country-select">Страна</label>
										<span class="incorrect-mssg">Выберите страну</span>
									</div>
								</div>
								<div class="form-input-wrapper">
									<div class="select-param-wrapper">
										<select name="city-select" id="city-select">
											<option value="" disabled selected></option>
											<option value="Киев">Киев</option>
											<option value="Одесса">Одесса</option>
											<option value="Днепр">Днепр</option>
											<option value="Днепр">Минск</option>
										</select>
										<label for="city-select">Город</label>
										<span class="incorrect-mssg">Выберите город</span>
									</div>
								</div>
								<div class="form-input-wrapper">
									<div class="select-param-wrapper mobile-gradient">
										<select name="agency-select" id="agency-select" multiple>
											<option value="" disabled selected></option>
											<option value="Киев">ШОУ-РУМ В ТРЦ "ДОМОСФЕРА"</option>
											<option value="Одесса">ШОУ-РУМ В ТРЦ "ДОМОСФЕРА"</option>
											<option value="Днепр">ШОУ-РУМ В ТРЦ "ДОМОСФЕРА"</option>
										</select>
										<label for="agency-select">Представитель</label>
										<span class="incorrect-mssg">Выберите представителя</span>
									</div>
								</div>															
								<div class="form-input-wrapper mobile-gradient">
									<input type="text" name="agency-address" id="agency-address">
									<label for="agency-address">Адрес</label>
								</div>
							</div>
							<div class="contacts-info-block">
								<div class="form-input-wrapper mobile-gradient">
									<input type="email" name="agency-email" id="agency-email">
									<label for="agency-email">Email</label>
									<span class="incorrect-mssg">Неправильно введенный Email</span>
								</div>
								<div class="form-input-wrapper">
									<input type="tel" name="agency-tel" id="agency-tel">
									<label for="agency-tel">Телефон</label>
									<span class="incorrect-mssg">Неправильно введенный телефон</span>
								</div>
								<div class="form-input-wrapper mobile-gradient">
									<input type="text" name="agency-site" id="agency-site">
									<label for="agency-site">Сайт</label>
								</div>								
							</div>
							<div class="pass-info-block">
								<div class="form-input-wrapper">
									<input type="password" name="agency-password" id="agency-password">
									<label for="agency-password">Пароль</label>
									<span class="incorrect-mssg">Неправильно введенный пароль</span>
								</div>
								<div class="form-input-wrapper">
									<input type="password" name="agency-confirm-password" id="agency-confirm-password">
									<label for="agency-confirm-password">Повторите пароль</label>
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
