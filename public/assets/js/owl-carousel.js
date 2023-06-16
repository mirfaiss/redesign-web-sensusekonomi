$(".owl-carousel").owlCarousel({
  loop: false,
  margin: 30,
  nav: false,
  autoplay: true,
  autoplayTimeout: 2500,
  autoplayHoverPause: false,
  stagePadding: 50,
  rewind:true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

var owl_dots = document.getElementsByClassName("owl-dot");
for (var i = 0; i < owl_dots.length; i++) {
  owl_dots[i].setAttribute("aria-label", "owl-dot");
}
