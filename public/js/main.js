let doc = $(document);
let navigation = $('.navigation');
let locationImg = $('#locationImg');

$(window).on('load', function (){
    doc.on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - navigation.outerHeight()
        }, 500);
    });

    new Swiper('#gallerySwiper', {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 20,
        watchOverflow: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        breakpoints: {
            1400: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 1
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    resizeMap();
});

$(window).on('resize', resizeMap);

let seaViewRoomSwiper = new Swiper('#seaViewRoomSwiper', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
});

let groundFloorRoomSwiper = new Swiper('#groundFloorRoomSwiper', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
});

function resizeMap(){
    $('#map').css({
        "height" : locationImg.outerHeight()+"px",
        "width" : locationImg.outerWidth()+"px"
    })
}
