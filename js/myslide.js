$(document).ready(function(){

	$('#next').click(function(){

		var activeDiv = $('div.active');
        activeDiv.removeClass('active');
		//activeDiv.next().addClass('active');
		if(activeDiv.next().length == 0){

             $('div.newsTicker').eq(0).addClass('active').css('opacity',0).animate({
             	opacity: 1
             } , 300);

		}else{
             
             activeDiv.next().addClass('active').css('opacity',0).animate({
             	opacity: 1
             } , 300);
		}
	});

	$('#prev').click(function(){

		var activeDiv = $('div.active');
        activeDiv.removeClass('active');
		activeDiv.prev().addClass('active');
		if(activeDiv.prev().length == 0){

            $('div.newsTicker').eq(-1).addClass('active').css('opacity',0).animate({
             	opacity: 1
             } , 300);

		}else{
             
             activeDiv.next().addClass('active').css('opacity',0).animate({
             	opacity: 1
             } , 300);
		}
	});
});