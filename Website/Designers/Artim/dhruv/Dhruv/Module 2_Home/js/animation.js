var moveForce = 30; 
var rotateForce = 20; 

$(document).mousemove(function(e) {
    var docX = $(document).width();
    var docY = $(document).height();
    
    var moveX = (e.pageX - docX/2) / (docX/3) * -moveForce;
    var moveY = (e.pageY - docY/2) / (docY/3) * -moveForce;
    
    var rotateY = (e.pageX / docX * rotateForce*3) - rotateForce;
    var rotateX = -((e.pageY / docY * rotateForce*3) - rotateForce);
    
    $('.popup')
        .css('left', moveX+'px')
        .css('top', moveY+'px')
        .css('transform', 'rotateX('+rotateX+'deg) rotateY('+rotateY+'deg)');
});