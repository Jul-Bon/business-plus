jQuery(window).load(function() {
  jQuery('.main_slider').flexslider({
    animation: "slide",
    directionNav: false
  });

  jQuery('.clients-say-slider').flexslider({
    animation: "slide",
    directionNav: false,
    itemWidth: 320,
    itemMargin: 30,
    minItems: 1,
    maxItems: 3
  });

  jQuery('.partners_slider').flexslider({
    animation: "slide",
    directionNav: false,
    animationLoop: true,
    itemWidth: 176,
    minItems: 2,
    maxItems: 6,
    move: 1,
  });

});

jQuery(document).ready(function() {
  jQuery()
});
