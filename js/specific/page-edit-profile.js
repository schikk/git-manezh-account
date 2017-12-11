$(document).ready(function() {

	// Nice select
	if ( $(window).width() > 319 || $(window).width() > $(window).height() ){
		$('select').niceSelect();
	}

	// Nice select label
	$('.select-param-wrapper select').on('change', function() {
		if ( $(window).width() > 319 || $(window).width() > $(window).height() ){
			if ( $(this).next('.nice-select').find('span.current').html() == '' ){
				$(this).next('.nice-select').removeClass('label-up');
			} else {
				$(this).next('.nice-select').addClass('label-up');
			}
		} else {
			if ( $(this).val() == '' ) {
				$(this).next('label').removeClass('label-up');
			} else {
				$(this).next('label').addClass('label-up');
			}
		}
	});

	// show pass inputs on click
	$('.change-pass-btn').click(function(event) {
		event.preventDefault();
		$(this).remove();
		$('.change-pass-inputs-block input').addClass('not-empty');
		$('.change-pass-inputs-block').show();
	});

	// change photo

	$('.change-photo-btn').click(function(event) {
		event.preventDefault();
		$('.page-overlay').fadeIn();
		$('.upload-photo-popup-container').addClass('active');
		$('body').addClass('overflow');
	});
	$('.page-overlay').click(function(event) {
		$(this).fadeOut();
		$('.upload-photo-popup-container').removeClass('active');
		$('body').removeClass('overflow');
	});

	// Validation profile form
	function editProfileForm(){
		var $form = $('#edit-user-profile-form'),
			$formFields = $form.find('input'),
			$inputName = $form.find('#user-name'),
			$inputSurname = $form.find('#surname'),
			$inputEmail = $form.find('#user-profile-email'),
			$inputPhone = $form.find('#user-profile-tel'),
			$inputPassword = $form.find('#profile-new-password'),
			$inputRePassword = $form.find('#profile-repeate-new-password'),
			$inputChooseCountry = $form.find('#country-select'),
			$inputChooseCity = $form.find('#city-select'),
			$submitBtn = $form.find('button');
			$invalid = $form.find('.incorrect-mssg');

		// Form fields label up
		$formFields.on('keyup', function(event) {
			if ( $(this).val() != '' ){
				$(this).addClass('not-empty');
			} else {
				$(this).removeClass('not-empty');
			}
		});

		$formFields.each(function(index, el) {
			if ( $(this).val() != '' ){
				$(this).addClass('not-empty');
			} else {
				$(this).removeClass('not-empty');
			}
		});
	  // Activate btn 
	  $formFields.on('keyup', function(event) {
	    if( $formFields.change() ) {
	      $('.login-register-btn').addClass('btn-active');
	    }
	    else {
	      $('.login-register-btn').removeClass('btn-active');}
	  });

		// Validation functions
		function validateName($name) {
			var nameReg = /^[a-zA-Zа-яА-Я. ]{2,3000}$/;
			return nameReg.test( $name );
		}

		function validateSurname($surname) {
			var surnameReg = /^[a-zA-Zа-яА-Я. ]{2,3000}$/;
			return surnameReg.test( $surname );
		}		

		function validatePhone($phone) {
			var phoneReg = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
			return phoneReg.test( $phone );
		}		
		function validateEmail($email) {
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})$/;
			return emailReg.test( $email );
		}

		// Submit form
		$form.on('submit', function(event) {
			if ( validateName($inputName.val()) && validateSurname($inputSurname.val()) && validateEmail($inputEmail.val()) && validatePhone($inputPhone.val()) && $inputPassword.val() != '' && inputChooseCountry.val() != '' && inputChooseCity.val() != '' ){

			} else {
				event.preventDefault();

				if ( !validateName($inputName.val()) ){
					$inputName.parent('.form-input-wrapper').addClass('invalid');
					$inputName.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
				}

				if ( !validateSurname($inputSurname.val()) ){
					$inputSurname.parent('.form-input-wrapper').addClass('invalid');
					$inputSurname.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
				}				

				if ( !validateEmail($inputEmail.val()) ){
					$inputEmail.parent('.form-input-wrapper').addClass('invalid');
					$inputEmail.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
				}

				if ( !validatePhone($inputPhone.val()) ){
					$inputPhone.parent('.form-input-wrapper').addClass('invalid');
					$inputPhone.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
				}				

	            var pass = $inputPassword.val();
	            var pass_rep = $inputRePassword.val();
				if ( pass != pass_rep ){
					$inputRePassword.parent('.form-input-wrapper').addClass('invalid');
					$inputRePassword.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
				}
				if ( $inputChooseCountry.val() == '' ){
					$inputChooseCountry.parent().addClass('invalid');
					$inputChooseCountry.parent('.select-param-wrapper').find('.incorrect-mssg').addClass('active');
				}
				if ( $inputChooseCity.val() == '' ){
					$inputChooseCity.parent().addClass('invalid');
					$inputChooseCity.parent('.select-param-wrapper').find('.incorrect-mssg').addClass('active');
				}								
			}
		});

		// Remove invalid class on focus
		$formFields.focus(function(event) {
			$(this).parent('.form-input-wrapper').removeClass('invalid');
			$(this).parent('.form-input-wrapper').find('.incorrect-mssg').removeClass('active');
		});
	};

	editProfileForm();
});	