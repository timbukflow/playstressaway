$(document).ready(function () {
    
    //nav
    
	$('#navburger').click(function(){
		$(this).toggleClass('open');
        $('.nav').fadeToggle(1000);
        $('.nav ul').toggleClass('up');
        $('.nav li').toggleClass('open');
	});
    
    $('.bookmark').click(function(e) {
	e.preventDefault();
        
        var AnchorOffset = 20;
        var position = $($(this).attr('href')).offset().top - AnchorOffset;
        
        $('#navburger').removeClass('open');
        $('.nav').fadeToggle(1000);
        $('.nav ul').removeClass('up');
        $('.nav li').removeClass('open');
        $("body, html").animate({
            scrollTop: position
        }, 2000);
    });
    
    //slider
    
    $(function () {
    setInterval(function () {
        $('.overimg').fadeOut(1500).delay(5000).fadeIn(1500).delay(5000);
    }, 5000);
    });
    
    
    //show and hide
    
   $(".togglebox").hide();
        $(".togglebutton").click(function(){
            var x = $(this).prev(".togglebox").css("display");  
            if(x=="block")
                $(this).text("\53");
            else
                $(this).text("\u2013");
            $(this).prev(".togglebox").slideToggle("slow");
            return true;
        });
    
    
    //Impressum

    $('.togglelink').click(function() {
        var totoggle = $(this).attr("data-toggle");
        $(totoggle).toggle();
        
        if ($(totoggle).is(":visible")) {
            $('html,body').animate({scrollTop:$(totoggle).offset().top}, 1000);
        }     
    });
    
        //Page Load
    
    $('.pagefadein').fadeOut(1000);
    
});