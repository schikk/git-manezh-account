$(document).ready(function() {
	// Form pass
	function passRestoreForm(){
		var $form = $('#password-restore-form'),
			$formFields = $form.find('input'),
			$inputEmail = $form.find('#user-email'),
			$submitBtn = $form.find('button');
			$invalid = $form.find('.incorrect-text');

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
	    if( !$('#user-email').val()=='' ) {
	      $('.login-register-btn').addClass('btn-active');
	    }
	    else {
	      $('.login-register-btn').removeClass('btn-active');}
	  });

		// Validation functions
		function validateEmail($email) {
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})$/;
			return emailReg.test( $email );
		}

		// Submit form
		$form.on('submit', function(event) {
			if ( validateEmail($inputEmail.val()) && $inputPassword.val() != '' ){

			} else {
				event.preventDefault();

				if ( !validateEmail($inputEmail.val()) ){
					$inputEmail.parent('.form-input-wrapper').addClass('invalid');
					$invalid.addClass('active');
					$('.password-restore-link').addClass('active');
				}
			}
		});

		// Remove invalid class on focus
		$formFields.focus(function(event) {
			$(this).parent('.form-input-wrapper').removeClass('invalid');
			$invalid.removeClass('active');
		});
	};

	passRestoreForm();
});