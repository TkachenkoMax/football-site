jQuery(document).ready(function ($) {
	$("#registration").click(function() {
		$(".regBIG").css("display", "block");
		$(".regIN").css("display", "block");
		$(".logIN").css("display", "none");
		$(".log-reg-buttons").css("display", "none");
	});
	
	$("#login").click(function() {
		$(".regBIG").css("display", "block");
		$(".logIN").css("display", "block");
		$(".regIN").css("display", "none");
		$(".log-reg-buttons").css("display", "none");
	});
	
	$(".regBIG").click(function() {
		$(".regBIG").css("display", "none");
		$(".regIN").css("display", "none");
		$(".logIN").css("display", "none");
	});
	
	$(".gotologin").click(function() {
		$(".regIN").css("display", "none");
		$(".logIN").css("display", "block");
	});
	
	$(".gotoreg").click(function() {
		$(".regIN").css("display", "block");
		$(".logIN").css("display", "none");
	});
	
	$(".log-reg-main").hover(function() {
		$(".log-reg-buttons").css("display", "block");
	});
	
	$(".log-reg-main").mouseleave(function() {
		$(".log-reg-buttons").css("display", "none");
	});
});