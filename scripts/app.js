// var innerHeight = window.innerHeight;

(function(){
	
	$(window).on('resize load', function(){
		$('.box-left, .box-center, .box-right').css('height',window.innerHeight+"px"  );
		
		$msgInputHeight = $('.msg-input').innerHeight();
		$windowHeight = $(window).innerHeight();

		$msgBoxHeight = ( $windowHeight - $msgInputHeight ) + "px";
		$('.msg-trans-box').css('height', $msgBoxHeight);
	});

	$('#msgInput').on('keypress',function(e){
		if( e.which == 13 ){
			return false;
		}
	}).on('keyup', function(e){	
		e.preventDefault();
		// alert(e.which);
		if( e.which === 13 ){
			var msgElem = $("#msgInput");
			var msgBoxElem = $(".msg-box");
			var msgVal  = msgElem.html();
			if( msgVal !== "" ){

				let output;

				output = `
					<div class="msg">
						<div class="from">
							<span>${msgVal}</span>
						</div>
						<div class="clear"></div>
					</div>
				`; 
				msgBoxElem.append(output);
				msgElem.html('').trigger('focus');
			}
			$(".msg-box").animate({scrollTop: $(".msg-box")[0].scrollHeight }, 1000);
		}
	});

	$(".msg-box").animate({scrollTop: $(".msg-box")[0].scrollHeight }, 1000);



	// setTimeout(function(){
	// 	$(".msg-box").animate({scrollTop: $(".msg-box")[0].scrollHeight }, 1000);
	// }, 3000);


	// $(".msg_container_base").stop().animate({ scrollTop: $(".msg_container_base")[0].scrollHeight}, 1000);




})();
