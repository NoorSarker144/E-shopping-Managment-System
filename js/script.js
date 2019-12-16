$(document).ready(function(){
	$(window).scroll(function(){
		var scrolValue = $(window).scrollTop();
		if(scrolValue > 155) {
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






$("#latest-news > span").css("color","white");
$(document).on("click","#checkAll",function(){
    $('.state').prop("checked",'true');
});

$(document).on("click","#uncheckAll",function(){
    $('.state').removeAttr("checked",'false');
});

$(".give_date").on('change',function() {
	$(".take_date").val($(this).val());
});




$("#print").click(function(){
	$('.print-hide').hide();
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