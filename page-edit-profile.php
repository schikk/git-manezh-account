<?php include 'header.php'; ?>
		<div class="account-inner-page-wrapper edit-profile-page clearfix">
			<a href="index.php" class="logo">
				<img src="img/elements/logotype.svg" alt="Manezh">
			</a>
			<div class="username-container">
				<div class="name-id-container">
					<span class="username">ЕКАТЕРИНА КОЗЬМИНА</span>
					<span class="user-id-number">No. 345 679</span>
				</div>
				<div class="photo-container">
					<img src="img/profile_image.png" alt="username">
				</div>
			</div>
			<a href="javascript:history.go(-1)" class="back-btn"><span class="arrrow"></span>ВЕРНУТЬСЯ НАЗАД</a>
			<div class="edit-profile-form-wrapper">
				<div class="user-photo-container">
					<div class="user-photo-img-container">
						<img src="img/profile_image.png" alt="">
					</div>
					<a href="#" class="change-photo-btn">ЗАМЕНИТЬ ФОТО</a>
				</div>
				<div class="register-form-wrapper clearfix">
					<form action="#" method="POST" id="edit-user-profile-form">
						<div class="profile-top-block">
							<div class="form-input-wrapper">
								<input type="text" name="user-name" id="user-name">
								<label for="user-name">Имя</label>
								<span class="incorrect-mssg">Введите ваше имя</span>
							</div>
							<div class="form-input-wrapper">
								<input type="text" name="surname" id="surname">
								<label for="surname">Фамилия</label>
								<span class="incorrect-mssg">Введите вашу фамилию</span>
							</div>
							<div class="form-input-wrapper">
								<div class="select-param-wrapper">
									<select name="country-select" id="country-select">
										<option value="" disabled selected></option>
										<option value="Украина">Украина</option>
										<option value="Канада">Канада</option>
										<option value="США">США</option>
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
						</div>
						<div class="contacts-info-block">
							<div class="form-input-wrapper mobile-gradient">
								<input type="email" name="user-profile-email" id="user-profile-email">
								<label for="user-profile-email">Email</label>
								<span class="incorrect-mssg">Неправильно введенный Email</span>
							</div>
							<div class="form-input-wrapper">
								<input type="tel" name="user-profile-tel" id="user-profile-tel">
								<label for="user-profile-tel">Телефон</label>
								<span class="incorrect-mssg">Неправильно введенный телефон</span>
							</div>							
						</div>
						<div class="pass-info-block">
								<div class="change-pass-inputs-block">
									<div class="form-input-wrapper">
										<input type="password" name="profile-change-password" id="profile-change-password" placeholder="СТАРЫЙ ПАРОЛЬ">
										<label for="profile-change-password">СТАРЫЙ ПАРОЛЬ</label>
										<span class="incorrect-mssg">Неправильно введенный пароль</span>
									</div>
									<div class="form-input-wrapper">
										<input type="password" name="profile-new-password" id="profile-new-password" placeholder="НОВЫЙ ПАРОЛЬ">
										<label for="profile-new-password">НОВЫЙ ПАРОЛЬ</label>
									</div>
									<div class="form-input-wrapper">
										<input type="password" name="profile-repeate-new-password" id="profile-repeate-new-password" placeholder="НОВЫЙ ПАРОЛЬ ЕЩЕ РАЗ">
										<label for="profile-repeate-new-password">НОВЫЙ ПАРОЛЬ ЕЩЕ РАЗ</label>
										<span class="incorrect-mssg">Пароли не совпадают</span>
									</div>																
								</div>
							<div class="change-pass-btn-wrapper">
								<a href="#" class="change-pass-btn">СМЕНИТЬ ПАРОЛЬ</a>
							</div>
						</div>
						<button type="submit" class="login-register-btn edit-profile-btn">Сохранить изменения</button>
					</form>
				</div>
				<div class="exit-btn-wrapper">
					<a href="javascript:history.go(-1)" class="exit-btn">ВЫЙТИ</a>
				</div>				
			</div>			
		</div>
		<div class="page-overlay"></div>
		<div class="upload-photo-popup-container">
			<h3>ЗАГРУЗИТЕ ВАШЕ ФОТО</h3>
			<p>Загрузить вашу фотографию в форматах .jpg / .png весом до 300 Кб.</p>
			<form class="edit-photo-from" id="edit-photo-from" name="edit-photo-from" enctype="multipart/form-data" method="post" action="https://martsound.com.ua/wp-content/themes/martsound/mail-resume.php">
				<label for="my_file" class="load-photo-button">
					ЗАГРУЗИТЬ ФОТО						
					<input type="file" name="my_file" id="my_file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
					<input type="text" name="url" id="vacrob" class="vacrob">
					<button type="submit" id="submitPhotoBtn" class="submitPhotoBtn">ЗАГРУЗИТЬ ФОТО</button>
				</label>
				<span class="allowed-filetypes-text">Рекомендуемый размер 400 х 400 пикселей</span>
			</form>
		</div>
<?php include 'footer.php'; ?>	