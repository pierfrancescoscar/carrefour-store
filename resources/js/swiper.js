const swiper = new Swiper(".swiper", {
    loop: false,
    freeMode: true,
    observer: true,
    spaceBetween: 30,
    observeParents: true,
    slidesPerView: "auto",
    direction: "horizontal",
    paginationClickable: true,
  
    navigation: {
      nextEl: ".swiper-button-next-custom",
      prevEl: ".swiper-button-prev-custom",
    },
  
    mousewheel: {
      invert: false,
      releaseOnEdges: false,
    },
  });