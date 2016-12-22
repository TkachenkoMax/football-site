jQuery(document).ready(function ($) {
    setInterval(function () {
        switchNext();
    }, 5000);
 
	var array = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"]
	var array2 = ["#photo1", "#photo2", "#photo3", "#photo4", "#photo5", "#photo6", "#photo7"]
	var counter=0;

    function switchPrev() {
		counter=counter-1;
		$(array2[counter+1]).fadeOut(500);
		if(counter == -1){
			counter=6;
		}
		
		$(array2[counter]).fadeIn(1500);
		$('.slider .slider_text .slider_span').text(array[counter]);
    };

    function switchNext() {
		counter=counter+1;
		$(array2[counter-1]).fadeOut(500);
		if(counter == 7){
			counter=0;
		}
		
		$(array2[counter]).fadeIn(1500);
		$('.slider .slider_text .slider_span').text(array[counter]);
    };

    $('a.btn_prev').click(function () {
        switchPrev();
    });

    $('a.btn_next').click(function () {
        switchNext();
    });
});