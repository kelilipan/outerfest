window.onscroll = function () {
	if (document.documentElement.scrollTop > 50) {
		$('nav').removeClass('bg-nav-primary');
		$('nav').addClass('bg-nav-secondary');
	}

	if (document.documentElement.scrollTop <= 0) {
		$('nav').removeClass('bg-nav-secondary');
		$('nav').addClass('bg-nav-primary');
	}
}

$(function () {
	$(".explore-btn").find("a").click(function (e) {
		e.preventDefault();
		var section = $(this).attr("href");
		$("html, body").animate({
			scrollTop: $(section).offset().top
		});
	});
});

$('.material-input').each(function () {
	check($(this));
});

$('.material-input').on('focusout', function () {
	check($(this));
});

function check($input) {
	if (!$input.val()) {
		$input.removeClass('has-value');
		return;
	}
	if ($input.val().length > 0) {
		$input.addClass('has-value');
	} else {
		$input.removeClass('has-value');
	}
}