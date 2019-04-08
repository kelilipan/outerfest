window.onscroll = function(){
	if (document.documentElement.scrollTop > 50) {
		$('nav').removeClass('bg-nav-primary');
		$('nav').addClass('bg-nav-secondary');
	}
	
	if (document.documentElement.scrollTop <= 0) {
		$('nav').removeClass('bg-nav-secondary');
		$('nav').addClass('bg-nav-primary');
	}
}

$(function() {
	$(".explore-btn").find("a").click(function(e) {
	    e.preventDefault();
	    var section = $(this).attr("href");
	    $("html, body").animate({
	        scrollTop: $(section).offset().top
	    });
	});
});