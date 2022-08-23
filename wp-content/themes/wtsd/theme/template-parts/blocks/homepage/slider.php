<?php


$slider_title = get_field('slider_title');
$slider_text = get_field('slider_text');
$slider_link = get_field('slider_link');

$image_phone_mobile = get_field('slider_iphone_image_mobile');
$image_phone_tablet = get_field('slider_iphone_image_tablet');
$image_phone_desktop = get_field('slider_iphone_image_desktop');


$image_1_mobile = get_field('slider_image_1_mobile');
$image_1_tablet = get_field('slider_image_1_tablet');
$image_1_desktop = get_field('slider_image_1_desktop');

$image_2_mobile = get_field('slider_image_2_mobile');
$image_2_tablet = get_field('slider_image_2_tablet');
$image_2_desktop = get_field('slider_image_2_desktop');

$image_3_mobile = get_field('slider_image_3_mobile');
$image_3_tablet = get_field('slider_image_3_tablet');
$image_3_desktop = get_field('slider_image_3_desktop');

$image_4_mobile = get_field('slider_image_4_mobile');
$image_4_tablet = get_field('slider_image_4_tablet');
$image_4_desktop = get_field('slider_image_4_desktop');
?>
<section class="track-health mt-[81px] md:mt-[80px] md:pl-[57px] xl:pl-0">

    <div class="relative flex flex-col items-center overflow-x-hidden pl-[18px] pr-[22px] md:px-0 lg:pt-[96px] lg:pb-[100px] lg:flex-row">
        <div class="track-health__text flex flex-col xl:max-w-[353px] text-center items-center md:mr-[160px] md:ml-[161px] lg:ml-[150px] lg:mr-[108px] lg:text-left lg:items-start">

            <div class="track-health__stick w-7 h-[5px]"></div>
            <h1 class="track-health__title leading-9 px-7 md:px-0 tracking-[0.2px] text-[20px] mb-[18px] mt-[26px] font-bold md:text-[40px] md:leading-[52px]">
                <?php echo $slider_title ?>
                <p class="track-health__description small-text px-1">
                    <?php echo $slider_text ?>
                </p>
                <a href="<?php echo $slider_link['url'] ?>" target="<?php echo $slider_link['target'] ?>" class="button-link mt-7 text-sm font-bold leading-5"><?php echo $slider_link["title"] ?></a>

        </div>
        <div class="slider-container flex items-center overflow-hidden relative pl-[133px] w-[256px] ml-[64px] h-[515px] md:ml-0  md:w-[711px] md:h-[561px]  xl:max-w-[829px] xl:h-[638px] md:pl-[31px] md:pr-[43.28px] lg:pl-[5px] lg:pr-[57px]">
            <div class="absolute phone w-[212px] h-[426px] md:w-[231px] md:h-[464px] xl:w-[262px] xl:h-[527px]">
                <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $image_phone_desktop ?>">
                    <source media="(min-width: 768px)" srcset="<?php echo $image_phone_tablet ?>">
                    <img src="<?php echo $image_phone_mobile ?>">
                </picture>
            </div>
            <div class="swiper w-[390px] md:ml-0 md:w-[646px] xl:w-[825px]">

                <div class="swiper-wrapper flex items-center">

                    <div class="swiper-slide md:w-[198px] md:h-[429px]">
                        <picture>
                            <source media="(min-width: 1024px)" srcset="<?php echo $image_1_desktop ?>">
                            <source media="(min-width: 768px)" srcset="<?php echo $image_1_tablet ?>">
                            <img src="<?php echo $image_1_mobile ?>">
                        </picture>
                    </div>
                    <div class="swiper-slide md:w-[198px] md:h-[429px]">
                        <picture>
                            <source media="(min-width: 1024px)" srcset="<?php echo $image_2_desktop ?>">
                            <source media="(min-width: 768px)" srcset="<?php echo $image_2_tablet ?>">
                            <img src="<?php echo $image_2_mobile ?>">
                        </picture>
                    </div>
                    <div class="swiper-slide md:w-[198px] md:h-[429px]">
                        <picture>
                            <source media="(min-width: 1024px)" srcset="<?php echo $image_3_desktop ?>">
                            <source media="(min-width: 768px)" srcset="<?php echo $image_3_tablet ?>">
                            <img src="<?php echo $image_3_mobile ?>">
                        </picture>
                    </div>
                    <div class="swiper-slide md:w-[198px] md:h-[429px]">
                        <picture>
                            <source media="(min-width: 1024px)" srcset="<?php echo $image_4_desktop ?>">
                            <source media="(min-width: 768px)" srcset="<?php echo $image_4_tablet ?>">
                            <img src="<?php echo $image_4_mobile ?>">
                        </picture>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex lg:absolute lg:bottom-[20px] lg:left-[50%] xl:left-[150px] xl:bottom-[175px] flex-col md:flex-row-reverse md:max-w-[270px] justify-center grow-0 max-w-[134px] mt-[37px]">
            <div id="totalSlide" class="text-center flex items-center text-base font-semibold leading-5 ml-[46px]">1/4
                screens</div>
            <div class="flex mt-2">
                <div class="swiper-button-prevs mr-6 cursor-pointer"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                <div class="swiper-button-nexts cursor-pointer"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</section>