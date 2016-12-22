jQuery(document).ready(function ($) {
	$(".clubBIG").click(function() {
		$(".clubBIG").css("display", "none");
		$(".club").css("display", "none");
	});
	
	$(".club-logo-in-list").click(function() {
		var id_club = "#" + this.id + "_info";
		$(".clubBIG").css("display", "block");
		$(id_club).css("display", "block");
	});
});