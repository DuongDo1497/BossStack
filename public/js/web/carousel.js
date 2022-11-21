$('.partner-carousel').owlCarousel({
  nav: false,
  loop: true,
  dots: false,
  autoplay: true,
  mouseDrag: false,
  autoplaySpeed: 1000,
  responsive:{
    0:{
        items: 1,
    },
    576:{
      items: 3,
    },
    1400:{
      items: 5,
    }
  }
})

$('.review-carousel').owlCarousel({
  items: 1,
  loop: true,
  dots: false,
  margin: 66,
  autoplay: true,
  mouseDrag: false,
  autoplaySpeed: 1500,
  navText: [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-right'></i>"
  ],
  responsive:{
    0:{
      nav: false,
    },
    576:{
      nav: true,
    },
  }
})