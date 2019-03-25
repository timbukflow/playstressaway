$(document).ready(function () {
    
    //nav
    
	$('#navburger').click(function(){
		$(this).toggleClass('open');
        $('.nav').toggleClass('on');
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
    
    $('.wl').click(function() {
        $(this).siblings('.wl-hidden').fadeIn();
        $(this).css("display", "none")
    });
    
});