/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Swiper, { Navigation, Pagination } from 'swiper';


function displyTotalSLide(swiper) {

    var totalSlide = document.getElementById('totalSlide');

    totalSlide.innerHTML = (swiper.realIndex + 1) + '/' + this.customTotalSlide + ' screens';

}


const swiper = new Swiper('.swiper', {

    loop: true,
    modules: [Navigation],
    slidesPerView: 2,
    spaceBetween: 23,
    observer: true,
    centeredSlides: true,
    navigation: {
        nextEl: '.swiper-button-nexts',
        prevEl: '.swiper-button-prevs',

    },

    scrollbar: {
        el: '.swiper-scrollbar',
    },
    runCallbacksOnInit: true,

    breakpoints: {

        768: {
            slidesPerView: 3,
            spaceBetween: 26,
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    },
    on: {
        beforeInit: function () {
            let numOfSlides = this.wrapperEl.querySelectorAll(".swiper-slide").length;
            this.customTotalSlide = numOfSlides;
        }
    }
});

swiper.on('slideChange', displyTotalSLide)

