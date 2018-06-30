// var innerHeight = window.innerHeight;

(function(){
	
	$(window).on('resize load', function(){
		$('.box-left, .box-center, .box-right').css('height',window.innerHeight+"px"  );
		
		$msgInputHeight = $('.msg-input').innerHeight();
		$windowHeight = $(window).innerHeight();

		$msgBoxHeight = ( $windowHeight - $msgInputHeight ) + "px";
		$('.msg-trans-box').css('height', $msgBoxHeight);
	});

})();

