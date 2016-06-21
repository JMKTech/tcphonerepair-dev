
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

// Background Scrolling Parallex
jQuery(document).ready(function(){

var top_header = $('.hero');
top_header.css({'background-position':'center center'}); // better use CSS

$(window).scroll(function () {
var st = $(this).scrollTop();
top_header.css({'background-position':'center calc(50% + '+(st*.5)+'px)'});
});
});