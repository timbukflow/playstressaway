$(document).ready(function(){

     $(function() {
         $('.scroll-down').click (function() {
            $('html, body').animate({scrollTop: $('.main-content').offset().top }, 'slow');
             return false;
         });
     });
     
});

