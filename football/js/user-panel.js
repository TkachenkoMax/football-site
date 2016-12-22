jQuery(document).ready(function ($) {
	$(".user-logged").hover(function() {
		$(".user-buttons").css("display", "block");
	});
	
	$(".user-logged").mouseleave(function() {
		$(".user-buttons").css("display", "none");
	});
});