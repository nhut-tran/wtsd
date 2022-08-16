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

    totalSlide.innerHTML = (swiper.realIndex + 1) + '/' + (this.wrapperEl.querySelectorAll(".swiper-slide").length - 2) / 2 + ' screens';

}


const swiper = new Swiper('.swiper', {

    loop: true,
    modules: [Navigation],
    slidesPerView: 3,
    spaceBetween: 30,
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

            spaceBetween: 26,
        }
    }
});

swiper.on('slideChange', displyTotalSLide)

