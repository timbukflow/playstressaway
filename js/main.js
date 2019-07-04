$(document).ready(function () {
    
// nav //
    
	$('#navburger').click(function(){
		$(this).stop(true).toggleClass('open');
        $('.nav').stop(true).fadeToggle(1000);
        $('.nav ul').stop(true).toggleClass('up');
        $('.nav li').stop(true).toggleClass('open');
	});
    
   
    
    $('.bookmark').click(function() {
        var position = $($(this).attr('href')).offset().top - 150;
        
        $('#navburger').removeClass('open');
        $('.nav').fadeToggle(1000);
        $('.nav ul').removeClass('up');
        $('.nav li').removeClass('open');
        $("body, html").animate({scrollTop: position}, 2000);
    });
    
    $('.footer').click(function() {
         var position = $($(this).attr('href')).offset().top - 150;
        $("body, html").animate({
            scrollTop: position
        }, 2000);
    });
    
    
// Sroll resizing Navigation //
    
    
    $(document).on('scroll', function () {
        if ($(document).scrollTop() > 10) {
            $('.nav-logo').css('paddingTop', '20px');
            $('.nav-logo').css('width', '150px');
            $('#navburger').css('margin', '45px 50px 40px 40px');
        }   
        else {
            $('.nav-logo').css('paddingTop', '30px');
            $('.nav-logo').css('width', '180px');
            $('#navburger').css('margin', '55px 50px 50px 50px');
        }
    });
    
    
// + button //
    
    $(".togglebox").hide();
    $(".togglebutton").click(function(){
        var x = $(this).parents("div").next(".togglebox").css("display");  
        if(x=="block")
            $(this).text("\53");
        else
            $(this).text("\u2013");
            $(this).parents("div").next(".togglebox").slideToggle("slow");
        return true;
    });
    
    
// impressum //

    $('.togglelink').click(function() {
        var totoggle = $(this).attr("data-toggle");
        $(totoggle).toggle();
        
        if ($(totoggle).is(":visible")) {
            $('html,body').animate({scrollTop:$(totoggle).offset().top}, 1000);
        }     
    });

// page load //
    
    $('.pagefadein').fadeOut(1000);

    
// Check Box //
     
    $(".stresstest").click(function(event) {
        var total = 0;
        $(".stresstest:checked").each(function() {
            total += parseInt($(this).val());
        });
        
        if (total == 0) {
            $('#amount').text('0');
        } else {                
            $('#amount').text(total);
        }
    });
    
});

