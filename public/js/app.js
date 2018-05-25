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


// CLICK ON CATEGORY 

var numberOfCat;
$(".catalogue").click(function() {
  numberOfCat = $(this).data('id');
  $("#"+numberOfCat).removeClass("hide-cat");
  $("#"+numberOfCat).addClass("show-cat");
  $(".js-close-catalogue").show();
  $(".catalogue-content").delay(400).show();
  $(".c-title").show();
});

$(".js-close-catalogue").click(function() {
  $("#"+numberOfCat).removeClass("show-cat");
  $("#"+numberOfCat).addClass("hide-cat");
  $(".js-close-catalogue").hide();
  $(".catalogue-content").hide();
  $(".c-title").hide();
});