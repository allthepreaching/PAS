$(".carousel").owlCarousel({
  margin: 10,
  loop: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      autoHeight: true,
    },
    600: {
      items: 3,
    },
  },
});
