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

});