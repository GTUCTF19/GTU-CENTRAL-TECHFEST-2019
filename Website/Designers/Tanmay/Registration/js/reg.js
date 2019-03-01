$(document).ready(function(){
		$(".hidden1").hide();
		$(".hidden2").hide();
		$(".hidden3").hide();
		$(".loading1").fadeOut();
		$(".loading2").fadeOut();
		$(".loading3").fadeOut();
	$("#eventselect").click(function(){
		$(".loading1").fadeIn();
		$(".hidden1").show();
		setTimeout(function(){
  		$(".loading1").fadeOut()
	}, 500);
	});
	$("#subeventselect").click(function(){
		$(".loading2").fadeIn();
		$(".hidden2").show();
		setTimeout(function(){
  		$(".loading2").fadeOut()
	}, 500);
	});
	$("#memberselect").click(function(){
		$(".loading3").fadeIn();	
		$(".hidden3").show();
		setTimeout(function(){
  		$(".loading3").fadeOut()
	}, 500);
	});

	
});
