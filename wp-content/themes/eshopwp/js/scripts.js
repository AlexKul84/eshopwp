$(function(){
	$('.carousel').carousel({
		interval: false
	});
});

$(function(){
	$(".btn-slide1").hover(
					function (event) {
						$(this).css({"background":"#975fa1"})
					},
					function (event) {
						$(this).css({"background":"#28062e"})
					}	
				);
});

$(function(){
	$(".btn-slide2").hover(
				function (event) {
					$(this).css({"background":"#28062e"})
				},
				function (event) {
					$(this).css({"background":"none"})
				}	
			);
});

// $(function(){
// 			$("#vk_up img").hover(
// 					function (event) {
// 						$(this).attr('src', 'img/vk_hov.png')
// 					},
// 					function (event) {
// 						$(this).attr('src','img/vk.png')
// 					}	
// 				);
// });

// $(function(){
// 			$("#ok_up img").hover(
// 			function (event) {
// 				$(this).attr('src', 'img/ok_hov.png')
// 			},
// 			function (event) {
// 				$(this).attr('src','img/ok.png')
// 			}	
// 		);
// });



/////////button page up/////////

document.onscroll = myScroll;

function myScroll(){
	var sc = jQuery(document).scrollTop();

/////////cart/////////
/*
	if(sc > 250) {
		jQuery('.cart-fon').css({
								"position":"fixed",
								"top":"0",
								"right":"80px",
								"padding-top":"4px",
								"padding-bottom":"5px",
								"border-radius":"0 0 7px 7px",
								"font-size":"12px"
							});
		jQuery('.navbar-text.cart-fon .glyphicon-shopping-cart').css({
								"font-size":"14px"
							});

	}
	else if (sc <250){
		jQuery('.cart-fon').css({
								"position":"static",
								"padding-top":"15px",
								"padding-bottom":"15px",
								"border-radius":"0",
								"font-size":"14px"
							});
		jQuery('.navbar-text.cart-fon .glyphicon-shopping-cart').css({
								"font-size":"18px"
							});
	}
*/
/////////end cart/////////


	if(sc > 500 && jQuery('.on-top').css("display") != "block") {
		jQuery('.on-top').css({"display":"block"});
		blockIn(0.1, jQuery('.on-top'));
	}
	else if (sc <500 && jQuery('.on-top').css("display") != "none"){
		//jQuery('.on-top').css({"display":"none"})
		blockOut(jQuery(".on-top").css("opacity"),jQuery('.on-top'))
	}
}

function blockIn(op, elem){
	elem.css({"opacity":op});
	op +=0.1;
	if(op < 1){
		setTimeout(
			function(){
				blockIn(op, elem)
			},
			100
		);
	}
}

function blockOut(op, elem){
	elem.css({"opacity":op});
	op -=0.1;
	if(op > 0) {
		setTimeout(
					function () {
						blockOut(op,elem)
					},
					100
		);
	}
	else {
		jQuery(".on-top").css({"display":"none"});
	}
}

function toTop(){
	var root = jQuery(document);
	var scrolling = root.scrollTop();

	scrolling -= 20;

	root.scrollTop(scrolling);

	if(scrolling > 0){
		setTimeout(toTop,1);
	}
}

/////////end button page up/////////

$(function(){
	new WOW().init();
});