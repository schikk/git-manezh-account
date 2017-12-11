$(document).ready(function() {

	// hover account block
	if (screen.width > 767) {
		$('.username-container').hover(function() {
			$('.username-account-hover-block').addClass('hover-block');
			$('.files-container').addClass('hover');
			$('.account-inner-page-right-col').addClass('hovered');
			$('.username-container').addClass('hovered');
		}, function() {
			/* Stuff to do when the mouse leaves the element */
		});
		$('.account-inner-page-left-col').hover(function() {
			$('.username-account-hover-block').removeClass('hover-block');
			$('.files-container').removeClass('hover');
			$('.account-inner-page-right-col').removeClass('hovered');
			$('.username-container').removeClass('hovered');
		}, function() {
			/* Stuff to do when the mouse leaves the element */
		});	
	}

	// mobile tabs
	if (screen.width < 767) {

		$('.username-account-hover-block').insertAfter('.mobile-account-col-wrapper');

		function tabMenu() {
			var tabList = $('.mobile-account-col-wrapper');
			var tabCols = $('.mobile-account-col-wrapper > div');
			var tabControls = $('.mobile-tabs-list > li');
			tabCols.eq(0).addClass('active');
			tabControls.eq(0).addClass('active');

			// Controls
			tabControls.on('click', function(event) {			

				var thisIndex = $(this).index();

				tabCols.removeClass('active');
				tabControls.removeClass('active');
				tabCols.eq(thisIndex).addClass('active');
				tabControls.eq(thisIndex).addClass('active');
				tabList.css('transform', 'translateX(-' + thisIndex*50 + '%)');
			});
		}
		tabMenu();

		// click on profile

		$('.mobile-profile-link').click(function(event) {
			event.preventDefault();
			$('.username-account-hover-block').toggleClass('active');
			$('body').toggleClass('overflow');
			$('.files-container, .exchange-rates-block-wrapper').toggleClass('fade');
		});

	}

	// search file

	$(function (){
		$('#searchinput').keyup(function (){
			var val=this.value;
			var regul= '';
			var re=new RegExp(regul+val,'i');
			$('.docs-list li h3').each(function (){
				$(this).parents('li').toggle(re.test($(this).text()));
			});
		});
	});

});