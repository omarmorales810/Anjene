$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
      navigation : true, // Show next and prev buttons

      slideSpeed : 500,
      paginationSpeed : 500,
      loop: true,

      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause:true,

  });
});