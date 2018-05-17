/******************** SLICK SLIDERS **********************/
$('.js-slider-center').slick({
	autoplay: true,
  	autoplaySpeed: 4000,
  	dots: true,
  	arrows: false
});

$('.js-slider-left').slick({
	autoplay: true,
  	autoplaySpeed: 3000,
  	dots: true,
  	arrows: false,  
    fade: true,
  	cssEase: 'linear',
  	speed: 500
});

$('.js-slider-right').slick({
	autoplay: true,
  	autoplaySpeed: 3000,
  	dots: true,
  	arrows: false,
  	fade: true,
  	cssEase: 'linear',
  	speed: 500
});


/*************************************/

$('.catalogue div').mouseenter(function() {
	$(this).addClass('js-hover');
	$('.catalogue span').addClass('js-hover-text');
})

$('.catalogue div').mouseleave(function() {
	$(this).removeClass('js-hover');
	$('.catalogue span').addClass('js-hover-text');
})