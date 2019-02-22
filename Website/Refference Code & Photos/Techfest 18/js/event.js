 $(document).ready(function(){
 	$(".selectevent1").click(function(){
 		
 		$eventname=document.getElementById("eventcard1").innerHTML;
 		
		$.post("ajax/rulesloading.php",{'eventname':$eventname},function(data){
			$("#numberone").html(data);
		});

 		if (typeof(Storage) !== "undefined") {
			localStorage.setItem("eventname", $eventname);
			document.getElementById("en").innerHTML = localStorage.getItem("eventname");}
		else {
    		document.getElementById("en").innerHTML = "Sorry, your browser does not support Web Storage...";
		}
 	

 	});
 	$(".selectevent2").click(function(){
 		$("#subevent1").removeClass("hidden");
 		$eventname=document.getElementById("eventcard2").innerHTML;
 		$.post("ajax/rulesloading.php",{'eventname':$eventname},function(data){
			$("#numberone").html(data);
		});
 		if (typeof(Storage) !== "undefined") {
			localStorage.setItem("eventname", $eventname);
			document.getElementById("en").innerHTML = localStorage.getItem("eventname");}
		else {
   			document.getElementById("en").innerHTML = "Sorry, your browser does not support Web Storage...";
			}
 	});
 	$(".selectevent1").mouseover(function(){
 		$(".select").innerHTML = $(".eventcard1").innerHTML;
 	})
});
 