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

	// Validation dealers form
	function registerDealersForm(){
		var $form = $('#register-dealers-form'),
			$formFields = $form.find('input'),
			$inputCompanyName = $form.find('#dealer-name'),
			$inputEmail = $form.find('#dealer-email'),
			$inputPhone = $form.find('#dealer-tel'),
			$inputPassword = $form.find('#dealer-password'),
			$inputConfirmPassword = $form.find('#dealer-confirm-password'),
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
	    if( !$('#city-select').val()=='' && !$('#country-select').val()=='' && !$('#dealer-name').val()=='' && !$('#dealer-email').val()=='' && !$('#dealer-password').val()=='' && !$('#dealer-confirm-password').val()=='') {
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
			if ( validateName($inputCompanyName.val()) && validatePhone($inputPhone.val()) && validateEmail($inputEmail.val()) && $inputPassword.val() != '' ){

			} else {
				event.preventDefault();

				if ( !validateName($inputCompanyName.val()) ){
					$inputCompanyName.parent('.form-input-wrapper').addClass('invalid');
					$invalid.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
				}

				if ( !validateEmail($inputEmail.val()) ){
					$inputEmail.parent('.form-input-wrapper').addClass('invalid');
					$invalid.parent('.form-input-wrapper').find('.incorrect-mssg').addClass('active');
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
			}
		});

		// Remove invalid class on focus
		$formFields.focus(function(event) {
			$(this).parent('.form-input-wrapper').removeClass('invalid');
			$invalid.removeClass('active');
		});
	};

	registerDealersForm();
});

;(function() {
	// самовызывающаяся ф-я
})();		