/*!
  * Scripts
  */
$(document).ready(function() {

    console.log('page loaded')
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
			$('.navbar').addClass("sticky");
		}
		else{
			$('.navbar').removeClass("sticky");
		}
	});

	$('nav .wp-block-search__button').on('click', function(){
		console.log('header clicked')
	})

	$('footer .wp-block-search__button').on('click', function(){
		console.log('footer clicked')
	})
});