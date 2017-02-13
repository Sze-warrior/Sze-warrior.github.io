$(document).ready(function(){

	var headerTitle = $('#title');

	$('#navbar-toggle').on('click', function(){
		$('.nav-list').slideToggle();
	});

    $(window).on('resize', function(){
        var nav = $('nav ul');
        
        if ($(window).width() > 700)
        {
        	$(nav).show();
        }else{
            $(nav).hide();
        }

        $(nav).css('display',''); //this is the alt in JQuery to hide/show the nav when the width resizes.   
    });	
});