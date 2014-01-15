$(document).ready(function(){
	// var soc_width = $('.b-share').width();
	// soc_width = soc_width/2;
	// var soc_padding = 490 - soc_width;
	// $('.b-share').css({'padding-left':soc_padding});
	// console.log($('.b-share').innerWi);
	var soc_width;
		var soc_margin;
		var e;
		e = setInterval(function(){
			if ($('.b-share').length){
				soc_width = $('.b-share').innerWidth();
				soc_margin = 980/2 - soc_width/2;
				$('.b-share').css({'margin-left':soc_margin});
				clearInterval(e);
			}
		},100);
});