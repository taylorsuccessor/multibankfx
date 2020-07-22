$(document).ready(function () {
    var index_swiper = new Swiper('#swiper-container-1', {
        navigation: {
            nextEl: '#swiper-container-1 .swiper-button-next',
            prevEl: '#swiper-container-1 .swiper-button-prev',
        },
        pagination: {
            clickable: true,
            el: '#swiper-container-1 .swiper-pagination',
        },
        loop: true,
        autoplay: {
            delay: 5000
        },
        updateOnImagesReady: true,
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplayDisableOnInteraction: false
    });
})

$(document).ready(function () {
    var bonuses_swiper = new Swiper('#swiper-container-2', {
        navigation: {
            nextEl: '#swiper-container-2 .swiper-button-next',
            prevEl: '#swiper-container-2 .swiper-button-prev',
        },
        pagination: {
            clickable: true,
            el: '#swiper-container-2 .swiper-pagination',
        },
        loop: true,
        autoplay: {
            delay: 5000
        },
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplayDisableOnInteraction: false
    });
})

$(document).ready(function () {
    var global_presence_swiper = new Swiper('#home_global_presence .swiper-container', {
        autoHeight: true,
        navigation: {
            nextEl: '#home_global_presence .swiper-button-next',
            prevEl: '#home_global_presence .swiper-button-prev',
        },
        updateOnImagesReady: true,
        slidesPerView: 3,
        loop: true,
        breakpoints: {
            991: {
                slidesPerView: 1,
            },
        },
        on: {
            init: function () {
                home_global_toggle_card(this)
            },
            slideChangeTransitionStart: function () {
                home_global_toggle_card(this)
            },
        },
        autoplay: {
            delay: 5000
        },

    });

    function home_global_toggle_card(obj) {
        if ($(window).width() > 991) {
            $('#home_global_presence .width-30').removeClass('width-30');
            $('#home_global_presence .width-40').removeClass('width-40');
            obj.slides.eq(obj.activeIndex).addClass('width-30');
            obj.slides.eq(obj.activeIndex + 1).addClass('width-40');
            obj.slides.eq(obj.activeIndex + 2).addClass('width-30');
        } else {
            $('#home_global_presence .width-30').removeClass('width-30');
            $('#home_global_presence .width-40').removeClass('width-40');
        }
    }
})

$(function() {
    var swiper = new Swiper('#home_company_news_container', {
      direction: 'vertical',
      simulateTouch: false,
      shortSwipes: true,
      slidesPerView: 4,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      mousewheel: {
        releaseOnEdges: false,
        sensitivity: 3
      },
    });
});

/*
function loadLazyResponsiveImage() {
    if ($(window).width() > 1024 && viewMode != 0) {
        var banners = document.querySelectorAll('.min1 .responsiveload');
        viewMode = 0;
        for (var i = 0; i < banners.length; i++) {
            var src = banners[i].dataset.src;
            banners[i].setAttribute("src", src);
        }
    } else if ($(window).width() <= 1024 && viewMode != 1){
        var banners = document.querySelectorAll('.min2 .responsiveload');
        viewMode = 1;
        for (var i = 0; i < banners.length; i++) {
            var src = banners[i].dataset.src;
            banners[i].setAttribute("src", src);
        }
    }
}
*/

