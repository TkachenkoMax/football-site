jQuery(document).ready(function ($) {
	var show = false;
	
	$(".show").click(function() {
		if(show == true){
			$(".show").css("top", "0");
			$(".header").css("display", "none");
			$(".menu").css("display", "none");
			$(".show").attr("src","images/down.png");
			show = false;
		} else{
			$(".header").css("display", "block");
			$(".menu").css("display", "block");
			$(".show").attr("src","images/up.png");
			show = true;
		}
	});
});