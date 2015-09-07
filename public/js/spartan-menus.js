/*
**
**  SPARTAN MENUS
**
*/

var nav = $('.nav-main');
var pull = nav.children('.pull');
var scrolltop = nav.offset().top;

$(document).ready(function() {

	$(document).bind('scroll', function() {
		if ($(document).scrollTop() > scrolltop) {
			if (!nav.hasClass('nav-fixed')) {
				nav.toggleClass('nav-fixed');
				$('.jumbotron').css('margin-bottom','3em');
			}
		} else {
			if (nav.hasClass('nav-fixed')) {
				nav.toggleClass('nav-fixed');
				$('.jumbotron').css('margin-bottom','0');
			}
			scrolltop = nav.offset().top;
		}
	});

	pull.bind('click', function(e) {
		e.preventDefault();
		$(this).toggleClass('nav-open').prev().slideToggle();
	}).bind('blur', function(e) {
		if ($(this).hasClass('nav-open')) {
			$(this).toggleClass('nav-open').prev().slideToggle();
		}
	});

});
