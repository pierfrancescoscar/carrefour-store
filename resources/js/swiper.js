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

const carousel = new Swiper(".carousel", {
    loop: true,
    observer: true,
    observeParents: true,
    slidesPerView: "auto",
    direction: "horizontal",

    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });