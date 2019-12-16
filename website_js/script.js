$(document).ready(function(){
	$(window).scroll(function(){
		var scrolValue = $(window).scrollTop();
		if(scrolValue > 50) {
			$('#fixed-header').slideDown(400);
		} else{
			$('#fixed-header').slideUp(400);
		}
	});

	$("#up").on('click',function(e){
		e.preventDefault();
		$('html,body').animate({
			'scrollTop':'0'
		},500);
	});
});

$("#print").click(function(){
    $("#values").show().printMe();
});

$("#print1").click(function(){
    $("#values1").show().printMe();
});

dycalendar.draw({
    target : "#calender",
    type : "month",
    highlighttoday: true
});