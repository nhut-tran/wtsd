/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */


import Swiper, { Navigation, Pagination } from 'swiper';



const swiper = new Swiper('.swiper', {

    loop: true,
    modules: [Navigation],
    slidesPerView: 3,
    spaceBetween: 30,
    // // If we need pagination
    // pagination: {
    //     el: '.swiper-pagination',
    // },


    navigation: {
        nextEl: '.swiper-button-nexts',
        prevEl: '.swiper-button-prevs',

    },

    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
