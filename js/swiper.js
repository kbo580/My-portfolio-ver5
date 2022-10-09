//------------------ バナーのswiperここから----------------
var swiper = new Swiper('.banner-swiper', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  breakpoints: {
    // 576px以上の場合
    576: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    // 768px以上の場合
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    }
  },
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});
//------------------ バナーのswiperここまで----------------


//------------------ メインビジュアルのswiperここから----------------
var mySwiper = new Swiper ('.mv-swiper', {
  loop: true,
  autoplay: {
    delay: 4000,
  },

  speed: 2000,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
})

//------------------ メインビジュアルのswiperここまで----------------

//------------------ singleのpointのswiperここから----------------
var pointSwiper = new Swiper('.pointSwiper', {
  loop: true,
  loopAdditionalSlides: 1,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //ページネーション
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
    clickable: true
  },

  slidesPerView: 1,
  speed: 500,
  effect: 'slide'
});

//------------------ singleのpointのswiperここまで----------------