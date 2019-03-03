if($(window).width() >1 && $(window).width() <800) {
	$(".mobile-view").removeClass("hidden");
	$(".custom-navbar , .common").addClass("hidden");
	$("")
}

if($(window).width() >800) {
	$(".mobile-view").addClass("hidden");
	$(".custom-navbar , .common").removeClass("hidden");
}

if ($(window).width() >1000 && $(window).width() <1200) {
	$(".atv").css({"transform":"translate(230%,885%)"});
	$(".example-container").css({"transform":"translate(50%,234%)"});
}

if ($(window).width() >800 && $(window).width() <999) {
	$(".atv").css({"transform":"translate(230%,995%)"});
	$(".example-container").css({"transform":"translate(50%,244%)"});
}

if ($(window).width() >300 && $(window).width() <500) {
	$(".atv").css({"transform":"translate(230%,990%)"});
	$(".example-container").css({"transform":"translate(50%,80%)"});
}


if ($(window).width() <420 ){
	$(".atv").css({"width" : "15%" , "transform":"translate(100%,1125%)"});
	$(".example-container").css({"transform":"translate(60%,195%)"});
	$(".ralph").css({"width": "50%"});	
	$(".tooltip").addClass("hidden");
}




//   $(function() {
// 	          $.scrollify({
// 	            section : "section",
// 	          });
// 	        });

// if($(window).width()>1 && $(window).width()<800){
// 			// alert("width beteen 300 to 450 ");
// 			$(".common,#counter").addClass("hidden");
// 			$("#overview .social800  .inner").addClass("mobile-about");

// 		}
// 	 if($(window).width()>800){

// 			$(".mobile-view, .mobile-footer").addClass("hidden");
// 			$(".common").removeClass("hidden");
// 		}
// 		if($(window).width()>800 && $(window).width()<900) {
// 			$(".custom-navbar").addClass("custom-navbar900");
// 				$(".header").addClass("header900");
// 				alert("width beteen 300 to 450 ");
// 		}
// 		if($(window).width()>901 && $(window).width()<1000) {
// 			$("#counter").addClass("hidden");
//  			$(".header").addClass("header1000");
// 			$(".custom-navbar").addClass("custom-navbar1000");
//  		}

// 		if($(window).width()>1001 && $(window).width()<1100) {
// 			$(".header").addClass("header1100");
// 			$(".custom-navbar").addClass("custom-navbar1000");
// 		}
// 		if($(window).width()>1201 && $(window).width()<1400) {
// 			// $(".header").addClass("header1100");
// 			$(".custom-navbar").addClass("custom-navbar1400");
// 		}
// 		if($(window).width()>1101 && $(window).width()<1200) {
// 			// $(".header").addClass("header1100");
// 			$(".custom-navbar").addClass("custom-navbar1200");
// 		}


