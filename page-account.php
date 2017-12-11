<?php include 'header.php'; ?>
		<div class="account-inner-page-wrapper clearfix">
			<div class="mobile-profile-container">
				<div class="username-container">
					<div class="photo-container">
						<img src="img/profile_image.png" alt="username">
					</div>
					<div class="name-id-container">
						<span class="username">ЕКАТЕРИНА КОЗЬМИНА</span>
						<span class="user-id-number">No. 345 679</span>
					</div>
					<a href="#" class="mobile-profile-link"></a>
				</div>				
			</div>
			<div class="mobile-tabs-container">
				<ul class="mobile-tabs-list">
					<li>
						<span>КУРСЫ ВАЛЮТ</span>
					</li>
					<li>
						<span>ФАЙЛЫ</span>
					</li>
				</ul>
			</div>
			<div class="mobile-account-col-wrapper clearfix">
				<div class="account-inner-page-left-col">
					<a href="index.php" class="logo">
						<img src="img/elements/logotype.svg" alt="Manezh">
					</a>
					<div class="exchange-rates-block-wrapper">
						<div class="exchange-rates-top-block">
							<ul class="exchange-rates-list">
								<li>
									<span class="exchange-rates-description">Для расчета с дилерами за наличные USD</span>
									<span class="exchange-rates-value">26.20</span>
								</li>
								<li>
									<span class="exchange-rates-description">Для расчета с дилерами с выпиской документов USD</span>
									<span class="exchange-rates-value">27.31</span>
								</li>
								<li>
									<span class="exchange-rates-description">Для расчета с дилерами за наличные EUR</span>
									<span class="exchange-rates-value">31.40</span>
								</li>
								<li>
									<span class="exchange-rates-description">Для расчета с дилерами с выпиской документов EUR</span>
									<span class="exchange-rates-value">32.76</span>
								</li>																	
							</ul>
						</div>
						<div class="exchange-rates-bottom-block">
							<ul class="exchange-rates-list">
								<li>
									<span class="exchange-rates-description">Курс оплаты гривневых заказов, USD</span>
									<span class="exchange-rates-value">26.11</span>
								</li>
								<li>
									<span class="exchange-rates-description">Курс оплаты гривневых заказов, EUR</span>
									<span class="exchange-rates-value">31.27</span>
								</li>																	
							</ul>						
						</div>
					</div>
				</div>
				<div class="account-inner-page-right-col">
					<div class="username-container">
						<div class="name-id-container">
							<span class="username">ЕКАТЕРИНА КОЗЬМИНА</span>
							<span class="user-id-number">No. 345 679</span>
						</div>
						<div class="photo-container">
							<img src="img/profile_image.png" alt="username">
						</div>
					</div>
					<div class="username-account-hover-block">
						<a href="page-edit-profile.php" class="edit-username-account-link">РЕДАКТИРОВАТЬ</a>
						<a href="javascript:history.go(-1)" class="exit-username-account-link">ВЫЙТИ</a>
					</div>
					<div class="files-container">
						<div class="search-file-form-wrapper">
							<form action="#" method="post" class="search">
								<div class="search-btn">
									<input type="submit" value="" id="searchsubmit" disabled="disabled"/>	
								</div>
								<div class="search-input">
									<input type="text" name="searchinput" placeholder="Поиск по файлам" id="searchinput" autocomplete="off" />
								</div>	
							</form>
						</div>
						<div class="price-list-container">
							<h2>ПРАЙС-ЛИСТЫ</h2>
							<ul class="docs-list">
								<!-- change class for a icon change: icon-zip-file,  icon-excel-file, icon-powerpoint-file, icon-word-file, icon-pdf-file, icon-img-file, icon-video-file -->
								<li>
									<div class="icon-container icon-zip-file"></div>
									<div class="file-description-container">
										<span class="time-upload">20 декабря 2017</span>
										<h3>Прайс-лист 2018</h3>
										<span class="file-type-name">.zip – 300 Кб</span>
									</div>
									<a href="docs/auth.zip" download="" class="file-download-link"></a>
								</li>
								<li>
									<div class="icon-container icon-excel-file"></div>
									<div class="file-description-container">
										<span class="time-upload">20 декабря 2017</span>
										<h3>Прайс-лист 2018</h3>
										<span class="file-type-name">.zip – 300 Кб</span>
									</div>
									<a href="#" download="" class="file-download-link"></a>
								</li>						
							</ul>
						</div>
						<div class="technical-information-container">
							<h2>ТЕХНИЧЕСКАЯ ИНФОРМАЦИЯ</h2>
							<ul class="docs-list">
								<!-- change class for a icon change: icon-zip-file,  icon-excel-file, icon-powerpoint-file, icon-word-file, icon-pdf-file, icon-img-file, icon-video-file -->
								<li>
									<div class="icon-container icon-pdf-file"></div>
									<div class="file-description-container">
										<span class="time-upload">20 декабря 2017</span>
										<h3>Каталог продукции</h3>
										<span class="file-type-name">.pdf – 300 Кб</span>
									</div>
									<a href="docs/auth.zip" download="" class="file-download-link"></a>
								</li>
								<li>
									<div class="icon-container icon-word-file"></div>
									<div class="file-description-container">
										<span class="time-upload">20 декабря 2017</span>
										<h3>Правила оформления коммерческого предложения</h3>
										<span class="file-type-name">.doc – 300 Кб</span>
									</div>
									<a href="#" download="" class="file-download-link"></a>
								</li>						
							</ul>
						</div>
					</div>
				</div>				
			</div>
		</div>
<?php include 'footer.php'; ?>	