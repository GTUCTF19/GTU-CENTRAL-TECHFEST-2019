$(document).ready(function(){
    $(".eventbutton").trigger('click'); 
});

$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show');
});
