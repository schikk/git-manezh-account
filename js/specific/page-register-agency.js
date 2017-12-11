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

	// Validation agencys form
	function registerAgencyForm(){
		var $form = $('#register-agency-form'),
			$formFields = $form.find('input'),
			$inputCompanyName = $form.find('#agency-name'),
			$inputEmail = $form.find('#agency-email'),
			$inputPhone = $form.find('#agency-tel'),
			$inputPassword = $form.find('#agency-password'),
			$inputConfirmPassword = $form.find('#agency-confirm-password'),
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
	    if( !$('#city-select').val()=='' && !$('#country-select').val()=='' && !$('#agency-email').val()=='' && !$('#agency-tel').val()=='' && !$('#agency-password').val()=='' && !$('#agency-confirm-password').val()=='') {
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
			if ( validateEmail($inputEmail.val()) && validatePhone($inputPhone.val()) && $inputPassword.val() != '' && inputChooseCountry.val() != '' && inputChooseCity.val() != '' ){

			} else {
				event.preventDefault();

				if ( !validateEmail($inputEmail.val()) ){
					$inputEmail.parent('.form-input-wrapper').addClass('invalid');
					$inputEmail.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
				}

				if ( !validatePhone($inputPhone.val()) ){
					$inputPhone.parent('.form-input-wrapper').addClass('invalid');
					$inputPhone.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
				}							

	            var pass = $inputPassword.val();
	            var pass_rep = $inputConfirmPassword.val();
				if ( pass != pass_rep ){
					$inputConfirmPassword.parent('.form-input-wrapper').addClass('invalid');
					$inputConfirmPassword.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
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

	registerAgencyForm();
});	