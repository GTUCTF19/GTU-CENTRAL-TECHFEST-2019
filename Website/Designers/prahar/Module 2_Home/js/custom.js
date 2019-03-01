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
$( document ).ready(function() {
  $(".ralph__background").addClass("back");
  $(".ralph__body").addClass("body");
  $(".ralph__head").addClass("head");
  $(".ralph__wifi-bar").addClass("wifi-bar");
  $(".ralph__wifi-bar:nth-child(1)").addClass("ralph_wifi-bar1");
  $(".ralph__wifi-bar:nth-child(2)").addClass("ralph__wifi-bar2");
  $(".ralph__wifi-bar:nth-child(3)").addClass("ralph__wifi-bar3");
});
$("#test p").addClass("load");