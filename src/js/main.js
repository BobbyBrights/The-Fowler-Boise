// @codekit-prepend "site/default-ui.js"

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

function splashShow(){
	setInterval(function(){
		$('#splash_bg-two').toggleClass('active');
	}, 10000);
}

$('.modal-btn').magnificPopup({
	type: 'inline',
	preloader: false,
	focus: '#input_1_1',

	// When elemened is focused, some mobile browsers in some cases zoom in
	// It looks not nice, so we disable it:
	callbacks: {
		beforeOpen: function() {
			if($(window).width() < 700) {
				this.st.focus = false;
			} else {
				this.st.focus = '#input_1_1';
			}
		}
	}
});

$(document).ready(function(){
	mobileMenu();
	splashShow();
});