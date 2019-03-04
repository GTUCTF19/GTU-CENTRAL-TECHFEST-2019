(function() {
$(".quotes").hide();
    var quotes = $(".quotes");
    var quoteIndex = -1;
    
    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(1000)
            .delay(1000)
            .fadeOut(1000, showNextQuote);
    }
    
    showNextQuote();
    
})();
$.magicCanvas.draw({
            type:"random-move",
            rgb : function (circlePos) {
                var px = circlePos.x;
                var py = circlePos.y;
                // do some computation....
                return {r:parseInt(px % 255),g:parseInt(py % 255),b:203};
            }
        });
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
$(document).ready(function() {
  
  $('.ralph__background').attr("class", "oldclass back");
  $('.ralph__body').attr("class", "oldclass body");
  $('.ralph__head').attr("class", "oldclass head");
  $('.ralph__wifi-bar').attr("class", "oldclass wifi-bar");
  $('.ralph__wifi-bar:nth-child(1)').attr("class", "oldclass ralph_wifi-bar1");
  $('.ralph__wifi-bar:nth-child(2)').attr("class", "oldclass ralph_wifi-bar2");
  $('.ralph__wifi-bar:nth-child(3)').attr("class", "oldclass ralph_wifi-bar3");


});
$("#test p").addClass("load");

