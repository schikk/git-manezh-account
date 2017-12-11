<?php include 'header.php'; ?>
		<div class="account-page-wrapper clearfix">
			<a href="javascript:history.go(-1)" class="mobile-btn-back"></a>
			<div class="account-page-left-col">
				<a href="index.php" class="logo">
					<img src="img/elements/logotype.svg" alt="Manezh">
				</a>
				<img src="img/image_personal_profile.jpg" alt="Manezh">
			</div>
			<div class="account-page-right-col page-password-restore">
				<a href="javascript:history.go(-1)" class="back-link"></a>
				<div class="account-content-wrapper">
					<h1>ЗАБЫЛИ ПАРОЛЬ?</h1>
					<p>Введите адрес email, который вы используете для входа на сайт, и мы вышлем вам ссылку для изменения пароля.</p>
					<div class="account-form-wrapper">
						<form action="password-restore-message.php" method="POST" class="account-login-form password-restore-form" id="password-restore-form">
							<div class="form-input-wrapper">
								<input type="email" name="user-email" id="user-email">
								<label for="user-email">Email</label>
							</div>
							<span class="incorrect-text">Аккаунта с таким email не существует</span>
							<div class="btn-wrapper">
								<button type="submit" id="pass-restore-btn" class="login-register-btn">СБРОСИТЬ ПАРОЛЬ</button>								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php include 'footer.php'; ?>		
