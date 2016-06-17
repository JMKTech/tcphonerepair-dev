
	jQuery(document).ready(function($){
		$(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 396) {
      $('#custom-bootstrap-menu').addClass('front-page-nav-fixed-top');
    }
    if ($(window).scrollTop() < 397) {
      $('#custom-bootstrap-menu').removeClass('front-page-nav-fixed-top');
    }
 	});
 });

