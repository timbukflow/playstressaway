$(document).ready(function(){

     $(function() {
         $('.scroll-down').click (function() {
            $('html, body').animate({scrollTop: $('.main-content').offset().top }, 'slow');
             return false;
         });
     });
    
      
    //Impressum
    

    $('.togglelink').click(function() {
        var totoggle = $(this).attr("data-toggle");
        $(totoggle).toggle();
        
        if ($(totoggle).is(":visible")) {
            $('html,body').animate({scrollTop:$(totoggle).offset().top}, 1000);
        }     
    });
     
});

