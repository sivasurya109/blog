// var innerHeight = window.innerHeight;

(function(){
	
	$(window).on('resize load', function(){
		$('.box-left, .box-center, .box-right').css('height',window.innerHeight+"px"  );
		
		$msgInputHeight = $('.msg-input').innerHeight();
		$windowHeight = $(window).innerHeight();

		$msgBoxHeight = ( $windowHeight - $msgInputHeight ) + "px";
		$('.msg-trans-box').css('height', $msgBoxHeight);
	});


	// setTimeout(function(){
	// 	$(".msg-box").animate({scrollTop: $(".msg-box")[0].scrollHeight }, 1000);
	// }, 3000);


	// $(".msg_container_base").stop().animate({ scrollTop: $(".msg_container_base")[0].scrollHeight}, 1000);




})();

