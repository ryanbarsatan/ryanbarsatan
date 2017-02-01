$('document').ready(function() {
     $(document).scroll(function(){ // detect scrolling
         if($(window).scrollTop() > 20) { // if we scrolled further then the original doc height
            $('.ui.fixed.borderless.menu').css('transition', 'box-shadow 0.4s linear');
         	$('.ui.fixed.borderless.menu').css('-webkit-box-shadow', '0px 2px 2px 1px rgba(0,0,0,0.21)');
         	$('.ui.fixed.borderless.menu').css('-moz-box-shadow', '0px 2px 2px 1px rgba(0,0,0,0.21)');
         	$('.ui.fixed.borderless.menu').css('box-shadow', '0px 2px 2px 1px rgba(0,0,0,0.21)');
         }  
         else{
         	$('.ui.fixed.borderless.menu').css('-webkit-box-shadow', 'none');
         	$('.ui.fixed.borderless.menu').css('-moz-box-shadow', 'none');
         	$('.ui.fixed.borderless.menu').css('box-shadow', 'none');
         }     
     });

 }); 	