//card deck
$(window).on('load', function() {
	$('.card').addClass('appear');
});

$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
	
	//jumbotron
	$('.jumbotron img').css({
		'transform' : 'translate(0px, ' + wScroll/4 +'%)'
		});
		
	$('.jumbotron h1').css({
		'transform' : 'translate(0px, ' + wScroll/2 +'%)'
		});
		
	$('.jumbotron p').css({
		'transform' : 'translate(0px, ' + wScroll/1.3 +'%)'
		});
	
	//members
	if (wScroll>$('.members') .offset().top-200){
		$('.members .img-thumbnail').each(function(i){
			setTimeout(function(){
				$('.members .img-thumbnail').eq(i).addClass('muncul');
			}, 300*(i+1));
		});
		
		
	}
		
	
});