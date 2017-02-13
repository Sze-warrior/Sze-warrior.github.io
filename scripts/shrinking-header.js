$(document).ready(function(){

	$(window).on("scroll", function() {
    	if($(window).scrollTop() > 100) {
        	$("header").addClass("header-bg-green");
    	} else if($(window).scrollTop() < 100) {
        	//remove the background property so it comes transparent again (defined in your css)
       		$("header").removeClass("header-bg-green");
    	}
	});
});