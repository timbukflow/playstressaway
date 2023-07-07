$(document).ready(function () {
    
// nav //
    
$('#navburger').click(function(){
		$(this).stop(true).toggleClass('open');
        $('.nav').stop(true).fadeToggle(1000);
        $('.nav ul').stop(true).toggleClass('up');
        $('.nav li').stop(true).toggleClass('open');
	});

    $('.bookmark').click(function() {
        var position = $($(this).attr('href')).offset().top - 120;
        
        $('#navburger').removeClass('open');
        $('.nav').fadeToggle(1000);
        $('.nav ul').removeClass('up');
        $('.nav li').removeClass('open');
        $("body, html").animate({scrollTop: position}, 2000);
    });
    
    $('.goto').click(function() {
        var goto = $($(this).attr('href')).offset().top - 120;
        
        $("body, html").animate({scrollTop: goto}, 2000);
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

$(".togglebutton").click(function() {
    var $this = $(this);
    var $toggleBox = $this.parents("div").next(".togglebox");
    
    if ($toggleBox.is(":visible")) {
        $this.text("+");
    } else {
        $this.text("\u2013");
    }

    $toggleBox.slideToggle("slow");
    return false;
});

    
// impressum //

    $('.targetlink').click(function() {
        var $target = $($(this).data("target"));
        $target.slideToggle(500, function() {
            if ($target.is(":visible")) {
                $('html,body').animate({scrollTop: $target.offset().top}, 1000);
            }
        });
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

