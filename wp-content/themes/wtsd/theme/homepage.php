<?php

/*** 
 * Template Name: Homepage
 * 
 * 
 *  @package wtsd
 */

get_header();

?>


<!--  -->

<main id="primary">
    <?php
    while (have_posts()) : the_post();
        get_template_part('template-parts/content/content', 'page');
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) : comments_template();
        endif;
    endwhile; // End of the loop.
    ?>
    <div class="container">
        <?php include 'template-parts/blocks/homepage/hero.php' ?>
        <!--connect-->
        <section class="connect mt-24 sm:px-5 md:px-10 lg:px-0 flex flex-col items-center">
            <div class="connect__text text-center order-1 self-start flex flex-col md:w-full sm:text-left lg:flex-row">
                <h1
                    class="connect__title text-[28px] px-10  leading-9 font-bold mb-7 xl:mr-[83px] md:text-[40px] sm:text-[40px] sm:px-0 sm:leading-[52px] xl:text-5xl xl:leading-[60px]">
                    Connect
                    easily.
                    Collaborate efficiently.</h1>
                <p class="connect__description small-text md:pr-[7.6rem] lg:pr-0 xl:max-w-[390px] lg:text-justify">
                    Rather
                    than do things the
                    typical
                    way, we’ve
                    created a
                    membership-based primary care practice truly designed around your needs.</p>
            </div>
            <div
                class="connect__dashboard flex justify-center mt-6  order-2 md:order-last lg:order-2 lg:mt-[72px] md:mt-9">

                <picture width="100%">
                    <source media="(min-width: 900px)" srcset="/wp-content/uploads/2022/08/dashboardlarge.png">
                    <source media="(min-width: 400px)" srcset="/wp-content/uploads/2022/08/dashboardmedium.png">
                    <img width="100%" src="/wp-content/uploads/2022/08/dashboardsmall.png">
                </picture>
            </div>
            <div
                class="connect__text-box mt-[23.38px] px-[3.47px] md:px-0 order-3 grid gap-x-2.5 md:order-2 lg:order-last sm:gap-x-5 grid-cols-1 sm:grid-cols-3  md:mt-6 lg:mt-14">
                <div class="text-box pl-6 pr-5 pt-4 pb-5 md:pt-5 lg:pt-4">
                    <h2 class=" text-box__title lg:text-[2rem] text-[24px] leading-8 lg:leading-10 font-bold">01</h2>
                    <h4 class="text-base font-semibold mb-[9px] mt-3 leading-5">For Doctor<h4>
                            <p class="text-sm leading-6">You get an in-house team to guide and advocate for you
                                through questions
                            </p>
                </div>
                <div class="text-box pl-6 pr-5 pt-4 pb-5 md:pt-5 lg:pt-4">
                    <h2 class="text-box__title lg:text-[2rem] text-[24px] leading-8 lg:leading-10 font-bold">02</h2>
                    <h4 class="text-base font-semibold mb-[9px] mt-3">For Patiten<h4>
                            <p class="text-sm">You get an in-house team to guide and advocate for you through questions
                            </p>
                </div>
                <div class="text-box pl-6 pr-5 pt-4 pb-5 md:pt-5 lg:pt-4">

                    <h2 class="text-box__title lg:text-[2rem] text-[24px] leading-8 lg:leading-10 font-bold">03</h2>

                    <h4 class="ftext-base font-semibold mb-[9px] mt-3">For Clincian<h4>
                            <p class="text-sm">You get an in-house team to guide and advocate for you through questions
                            </p>
                </div>
            </div>
        </section>
        <!--connect end-->
        <!--tips end-->
        <section class="tips mt-[54px] px-[20px] md:pr-[38px] md:pl-[45px] sm:px-0">
            <div class="grid w-full grid-cols-[280px] grid-rows-[min-content_286px_286px_286px] justify-center gap-[25px]
                md:grid-cols-[330px_330px] md:grid-rows-[min-content_354px_354px] md:gap-y-[0px] md:gap-x-[25px]
                lg:grid-cols-[440px_440px] lg:grid-rows-[min-content_389px_389px] lg:md:gap-x-[30px]">
                <h1
                    class="text-3xl text-center md:col-span-2 mx-auto font-bold mb-2 sm:text-left md:ml-0 md:text-[40px] leading-[52px] lg:text-5xl max-w-[280px] md:pr-14 md:max-w-[502px] md:mb-14 xl:mb-16">
                    Protect yourself
                    and your family first.</h1>
                <div class="tips__text-box">

                    <picture>
                        <source media="(min-width: 900px)" srcset="/wp-content/uploads/2022/08/athomelarge.png">
                        <source media="(min-width: 400px)" srcset="/wp-content/uploads/2022/08/athomemedium.png">
                        <img src="/wp-content/uploads/2022/08/athome.png">
                    </picture>

                    <div>
                        <h4
                            class="font-bold text-base leading-5 mb-3 mt-[30.8px] sm:text-xl sm:leading-6 sm:self-start sm:font-semibold lg:mb-[18px]">
                            Stay at
                            Home
                            first
                        </h4>
                        <p class="text-sm leading-6 max-w-[236px] sm:max-w-[286px] lg:max-w-[346px] sm:self-start">Our
                            technology
                            makes it
                            practically
                            impossible
                            for any patient data breach to occur
                        </p>
                    </div>

                </div>
                <div class="tips__text-box">
                    <picture>
                        <source media="(min-width: 900px)" srcset="/wp-content/uploads/2022/08/washhandlarge.png">
                        <source media="(min-width: 400px)" srcset="/wp-content/uploads/2022/08/washhandmedium.png">
                        <img src="/wp-content/uploads/2022/08/washhand.png">
                    </picture>
                    <div>
                        <h4
                            class="font-bold text-base leading-5 mb-3 mt-[30.8px] sm:text-xl sm:leading-6 sm:self-start sm:font-semibold lg:mb-[18px]">
                            Wash Your Hands
                            Periodically</h4>
                        <p class="text-sm leading-6 max-w-[236px] sm:max-w-[286px] lg:max-w-[346px] sm:self-start">You
                            can talk
                            freely
                            and
                            confidently
                            about patients with other health
                            professionals treating them
                        </p>
                    </div>
                </div>
                <div class="tips__text-box">

                    <picture>
                        <source media="(min-width: 900px)" srcset="/wp-content/uploads/2022/08/vitaminclarge.png">
                        <source media="(min-width: 400px)" srcset="/wp-content/uploads/2022/08/vitamincmedium.png">
                        <img src="/wp-content/uploads/2022/08/vitaminc.png">
                    </picture>
                    <div>
                        <h4
                            class="font-bold text-base leading-5 mb-3 mt-[30.8px] sm:text-xl sm:leading-6 sm:self-start sm:font-semibold lg:mb-[18px]">
                            Consume more Vitamin
                            C
                        </h4>
                        <p class="text-sm leading-6 max-w-[236px] sm:max-w-[286px] lg:max-w-[346px] sm:self-start">A
                            more fluid
                            communication
                            reduces the
                            risk of errors and enhances your
                            protection from a forensic point of view
                        </p>
                    </div>
                </div>
                <div class="tips__text-box">
                    <picture>
                        <source media="(min-width: 900px)" srcset="/wp-content/uploads/2022/08/sanitizerlarge.png">
                        <source media="(min-width: 400px)" srcset="/wp-content/uploads/2022/08/sanitizermedium.png">
                        <img src="/wp-content/uploads/2022/08/sanitizer.png">
                    </picture>
                    <div>
                        <h4
                            class="font-bold text-base leading-5 mb-3 mt-[30.8px] sm:text-xl sm:leading-6 sm:self-start sm:font-semibold lg:mb-[18px]">
                            Always Use Hand
                            Sanitizer
                        </h4>
                        <p class="text-sm leading-6 max-w-[236px] sm:max-w-[286px] lg:max-w-[346px] sm:self-start">
                            Organize your
                            communications by
                            patients, by securely sharing messages,
                            photos and documents with colleagues.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--tips end -->
        <!--suggestion start-->
        <section class="suggestion mt-[72.5px] md:mt-[80.5px] lg:mt-[100px] md:px-[63px] lg:px-[230px]">
            <div class="grid w-full grid-cols-[280px] justify-center gap-[64px]
                md:grid-cols-2 md:grid-rows-[min-content_max-content_max-content] md:gap-x-[64px] md:gap-y-[0px]
                lg:grid-cols-2 lg:grid-rows-[min-content_max-content_max-content] lg:gap-x-[136px]">
                <h1
                    class="text-3xl text-center tracking-[0.2px] md:col-span-2 mx-auto font-bold mb-[-9px] px-5 sm:text-left md:ml-0 md:text-[40px] leading-[52px] lg:text-5xl max-w-[280px] md:pl-0  md:max-w-[522px] md:mb-[72px] xl:mb-[81px]">
                    Modern clinics. Smart, hassle-free care.</h1>
                <div
                    class="suggestion__text-box flex flex-col items-center justify-start text-center min-h-[405px] sm:text-left">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/wp-content/uploads/2022/08/vitamincdesktop.png">
                        <source media="(min-width: 640px)" srcset="/wp-content/uploads/2022/08/vitaminctablet.png">
                        <img src="/wp-content/uploads/2022/08/vitamincmobile.png">
                    </picture>
                    <div>
                        <h4 class="text-[22px] leading-8 mb-3.5 mt-8 font-semibold md:mb-3 lg:text-[24px] lg:mb-4">
                            Consume
                            more
                            Vitamin
                            C
                        </h4>
                        <p
                            class="text-sm sm:text-base mx-5 leading-6 sm:mx-0 sm:leading-7 sm:max-w-[266px] lg:max-w-[346px] sm:self-start">
                            A
                            more fluid
                            communication
                            reduces the
                            risk of errors and enhances your
                            protection from a forensic point of view
                        </p>
                    </div>
                </div>
                <div
                    class="suggestion__text-box md:pt-[120px] lg:pt-[200px] flex flex-col items-center text-center justify-center sm:text-left ">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/wp-content/uploads/2022/08/athomedesktop.png">
                        <source media="(min-width: 640px)" srcset="/wp-content/uploads/2022/08/athometablet.png">
                        <img src="/wp-content/uploads/2022/08/athomemobile.png">
                    </picture>

                    <div>
                        <h4 class="text-[22px] leading-8 mb-3.5 mt-8 font-semibold md:mb-3 lg:text-[24px] lg:mb-4">Stay
                            at Home first</h4>
                        <p
                            class="text-sm sm:text-base mx-5 leading-6 sm:mx-0 sm:leading-7 min-w-[280px] sm:max-w-[266px] lg:max-w-[346px] sm:self-start">
                            You can talk
                            freely and confidently about patients with other health professionals treating them
                        </p>
                    </div>

                </div>
                <div class="suggestion__text-box flex flex-col items-center text-center justify-center sm:text-left">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/wp-content/uploads/2022/08/washhanddesktop.png">
                        <source media="(min-width: 640px)" srcset="/wp-content/uploads/2022/08/washhandtablet.png">
                        <img src="/wp-content/uploads/2022/08/washhandmobile.png">
                    </picture>
                    <div>
                        <h4 class="text-[22px] leading-8 mb-3.5 mt-8 font-semibold md:mb-3 lg:text-[24px] lg:mb-4">Wash
                            Your Hands
                            Periodically</h4>
                        <p
                            class="text-sm sm:text-base mx-5 leading-6 sm:mx-0 sm:leading-7 min-w-[280px] sm:max-w-[266px] lg:max-w-[346px] sm:self-start">
                            A more fluid communication reduces the risk of errors and enhances your protection from a
                            forensic point of view
                        </p>
                    </div>
                </div>
                <div
                    class="suggestion__text-box md:pt-[120px] lg:pt-[200px] flex flex-col items-center text-center justify-center sm:text-left">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/wp-content/uploads/2022/08/sanitizerdesktop.png">
                        <source media="(min-width: 640px)" srcset="/wp-content/uploads/2022/08/sanitizertablet.png">
                        <img src="/wp-content/uploads/2022/08/sanitizermobile.png">
                    </picture>
                    <div>
                        <h4 class="text-[22px] leading-8 mb-3.5 mt-8 font-semibold md:mb-3 lg:text-[24px] lg:mb-4">
                            Always Use Hand
                            Sanitizer
                        </h4>
                        <p
                            class="text-sm sm:text-base mx-5 leading-6 sm:mx-0 sm:leading-7 min-w-[280px] sm:max-w-[266px] lg:max-w-[346px] sm:self-start">
                            Organize your
                            communications by
                            patients, by securely sharing messages,
                            photos and documents with colleagues.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--suggestion end -->
        <!--slider start -->
        <section class="track-health mt-[81px] md:mt-[80px] md:pl-[57px] xl:pl-0">
            <div
                class="relative flex flex-col items-center overflow-x-hidden pl-[18px] pr-[22px] md:px-0 lg:pt-[96px] lg:pb-[100px] lg:flex-row">
                <div
                    class="track-health__text flex flex-col xl:max-w-[353px] text-center items-center md:mr-[160px] md:ml-[161px] lg:ml-[150px] lg:mr-[108px] lg:text-left lg:items-start">

                    <div class="track-health__stick w-7 h-[5px]"></div>
                    <h1
                        class="track-health__title leading-9 px-7 md:px-0 tracking-[0.2px] text-[20px] mb-[18px] mt-[26px] font-bold md:text-[40px] md:leading-[52px]">
                        Track Your Health
                        History Periodically</h1>
                    <p class="track-health__description small-text px-1">
                        A more fluid communication reduces the risk of errors and enhances your protection from a
                        forensic
                        point of view</p>
                    <a href="/" class="button-link mt-7 text-sm font-bold leading-5">Learn more &#8594</a>

                </div>
                <div
                    class="slider-container flex items-center overflow-hidden relative pl-[133px] w-[256px] ml-[64px] h-[515px]  md:w-[711px] md:h-[561px]  xl:max-w-[829px] xl:h-[638px] md:pl-[31px] md:pr-[43.28px] lg:pl-0 lg:pr-[57px]">
                    <div class="absolute phone w-[212px] h-[426px] md:w-[231px] md:h-[464px] xl:w-[262px] xl:h-[550px]">
                        <picture>
                            <source media="(min-width: 768px)" srcset="/wp-content/uploads/2022/08/iphonedesktop.png">
                            <img src="/wp-content/uploads/2022/08/iphonetablet.png">
                        </picture>
                    </div>
                    <div class="swiper w-[390px] md:ml-0 md:w-[646px] xl:w-[825px]">

                        <div class="swiper-wrapper flex items-center">

                            <div class="swiper-slide md:w-[198px] md:h-[429px]">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="/wp-content/uploads/2022/08/rectangledesktop.png">
                                    <img src="/wp-content/uploads/2022/08/rectangletablet.png">
                                </picture>
                            </div>
                            <div class="swiper-slide md:w-[198px] md:h-[429px]">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="/wp-content/uploads/2022/08/rectangledesktop.png">

                                    <img src="/wp-content/uploads/2022/08/rectangletablet.png">
                                </picture>
                            </div>
                            <div class="swiper-slide md:w-[198px] md:h-[429px]">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="/wp-content/uploads/2022/08/rectangledesktop.png">

                                    <img src="/wp-content/uploads/2022/08/rectangletablet.png">
                                </picture>
                            </div>
                            <div class="swiper-slide md:w-[198px] md:h-[429px]">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="/wp-content/uploads/2022/08/rectangledesktop.png">

                                    <img src="/wp-content/uploads/2022/08/rectangletablet.png">
                                </picture>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="flex lg:absolute lg:bottom-[20px] lg:left-[50%] xl:left-[150px] xl:bottom-[175px] flex-col md:flex-row-reverse md:max-w-[270px] justify-center grow-0 max-w-[134px] mt-[37px]">
                    <div id="totalSlide"
                        class="text-center flex items-center text-base font-semibold leading-5 ml-[46px]">1/4
                        screens</div>
                    <div class="flex mt-2">
                        <div class="swiper-button-prevs mr-6 cursor-pointer">&#8592</div>
                        <div class="swiper-button-nexts cursor-pointer">&#8594</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="contact-form mt-4">
                <?php echo do_shortcode('[gravityform id="3" title="true"]'); ?>
            </div>
        </section>
    </div>
    <!--slider end -->


</main><!-- #main -->
<?php
get_footer(); ?>