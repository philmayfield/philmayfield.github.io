$(document).ready(function(){
	var at = $('#at'),
		dot = $('#dot');

	$('h1').circleType({radius: 500});
	$('h2').circleType({
		radius: 500,
		dir:-1
	});

	$('.contact').hover(
		function(){
			at.addClass('hid');
			setTimeout(function(){
				at.text('@');
				at.removeClass('hid').addClass('rev');
			},500);
			dot.addClass('hid');
			setTimeout(function(){
				dot.text('.');
				dot.removeClass('hid').addClass('rev');
			},500);
		},function(){
			setTimeout(function(){
				at.removeClass('rev').addClass('hid');
				setTimeout(function(){
					at.text('at');
					at.removeClass('hid');
				},500);
				dot.removeClass('rev').addClass('hid');
				setTimeout(function(){
					dot.text('dot');
					dot.removeClass('hid');
				},500);
			},500);
		}
	);
});
