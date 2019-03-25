$(document).ready(function () {
    
    //nav
    
	$('#navburger').click(function(){
		$(this).toggleClass('open');
        $('.nav').fadeToggle(1500);
        $('.nav ul').toggleClass('up');
        $('.nav li').toggleClass('open');
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
    
});