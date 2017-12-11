<?php include 'header.php'; ?>
		<div class="account-page-wrapper clearfix">
			<div class="account-page-left-col">
				<a href="index.php" class="logo">
					<img src="img/elements/logotype.svg" alt="Manezh">
				</a>
				<img src="img/image_personal_profile.jpg" alt="Manezh">
			</div>
			<div class="account-page-right-col">
				<div class="account-content-wrapper">
					<h1>ДОБРО ПОЖАЛОВАТЬ В ЛИЧНЫЙ КАБИНЕТ КОМПАНИИ MANEZH</h1>
					<div class="account-form-wrapper">
						<form action="page-account.php" method="POST" class="account-login-form" id="login-form">
							<div class="form-input-wrapper">
								<input type="email" name="user-email" id="user-email">
								<label for="user-email">Email</label>
							</div>
							<div class="form-input-wrapper">
								<input type="password" name="user-password" id="user-password">
								<label for="user-password">Пароль</label>
							</div>
							<a href="page-password-restore.php" class="password-restore-link">Забыли пароль?</a>
							<div class="btn-wrapper">
								<button type="submit" class="login-register-btn">Войти</button>
							</div>
							<span class="incorrect-text">НЕВЕРНЫЙ EMAIL ИЛИ ПАРОЛЬ</span>
						</form>
						<div class="sign-up-row clearfix">
							<p>НЕТ АККАУНТА?</p>
							<a href="page-register.php" class="sign-up-link">ЗАРЕГИСТРИРУЙТЕСЬ</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include 'footer.php'; ?>		
