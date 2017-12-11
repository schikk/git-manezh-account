$(document).ready(function() {

	// choose category link
	$('.choose-category-block a').on('click', function(event) {
		event.preventDefault();
		var href = $(this).attr('href');
        if ($(this).hasClass('active')) {
        }
        else {
			$('.choose-category-block a').removeClass('active');
			$(this).addClass('active');
			$(this).parent().parent().find('.continue-link').addClass('active');
			$(this).parent().parent().find('.continue-link').attr('href', href);
        }
    });

});