$( document ).on( "change","#eventselect", function() {
	var eventName = $("#eventselect option:selected").val();
  $.post("ajax/changedropdown.php",{eventName:eventName},function(data) {
  $( "#subeventselect").empty();
  $( "#subeventselect").append(data);
  $( "#subeventselect").show();
	var subEventName = $("#subeventselect option:selected").val();
  $.post("ajax/memberdropdown.php",{eventName:eventName,subEventName:subEventName},function(data) {
  $( "#memberselect").empty();
  $( "#memberselect").append(data);
  $( "#memberselect").show();
	var totalMembers = $("#memberselect option:selected").val();
  $.post("ajax/pricedisplay.php",{eventName:eventName,subEventName:subEventName,totalMembers:totalMembers},function(data) {
  $( "#price").val();
  $( "#price").val(data);
  $( "#price").show();
  
});
  
});
  
});
	
});
$( document ).on( "change","#subeventselect", function() {
	var eventName = $("#eventselect option:selected").val();
	var subEventName = $("#subeventselect option:selected").val();
  $.post("ajax/memberdropdown.php",{eventName:eventName,subEventName:subEventName},function(data) {
  $( "#memberselect").empty();
  $( "#memberselect").append(data);
  $( "#memberselect").show();
	var totalMembers = $("#memberselect option:selected").val();
  $.post("ajax/pricedisplay.php",{eventName:eventName,subEventName:subEventName,totalMembers:totalMembers},function(data) {
  $( "#price").val();
  $( "#price").val(data);
  $( "#price").show();  
});
  
});

});
$( document ).on( "change","#memberselect", function() {
	var eventName = $("#eventselect option:selected").val();
	var subEventName = $("#subeventselect option:selected").val();
	var totalMembers = $("#memberselect option:selected").val();
  $.post("ajax/pricedisplay.php",{eventName:eventName,subEventName:subEventName,totalMembers:totalMembers},function(data) {
  $( "#price").val();
  $( "#price").val(data);
  $( "#price").show();
  
});
	if(eventName==0 && subEventName==0 && totalMembers==0)
	{
		$('#nextbutton').attr('disabled',true);
	}
	else
	{
		$('#nextbutton').attr('disabled',false);
	}
});
$(document).ready(function(){
	$("#subeventselect").hide();	
	$("#memberselect").hide();	
	$("#price").hide();	
	$('#nextbutton').attr('disabled',true);
});