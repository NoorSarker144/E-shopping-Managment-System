$(document).ready(function() {
	
	$("#slider").slider();
	$( ".datepicker" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy/mm/dd',
		yearRange: '2000:2050'
	});
  $(".datepicker").keypress(function(event) {event.preventDefault();});
	var min1 = $("#min1").text();
	var max1 = $("#max1").text();
	//alert(min1);
	$( "#slider").slider({
		range: true,
		min:1,
		max:1000,
		values: [min1,max1]
	});

	$('#slider').on('slide',function(event, ui){     
        $("#min").text(ui.values[0] + " ৳"); 
        $("#max").text(ui.values[1] + " ৳"); 
    });

    $('#slider').on('slidechange',function(event, ui){

		var min = ui.values[0];
		var max = ui.values[1];
		//alert(min);
		//alert(max);
		var url = producturl;
		$.ajax({
			type: "POST",
			url: url,
			data:{min:min,max:max,_token:producttoken},
			beforeSend: function() {
				$('#animate').show();
			},
			success: function(data){
				$(".all-product-section").hide().fadeIn().html(data);
			},
			complete: function() {
				$('#animate').hide();
			}
		});
    });

    new WOW().init();
});