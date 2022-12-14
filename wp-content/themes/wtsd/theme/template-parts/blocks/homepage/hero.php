<?php
$hero_title = get_field('hero_title');
$sub_title = get_field('sub_title');
$text = get_field('text');
$imageMobile = get_field('hero_image_mobile');
$imageDesktop = get_field('hero_image_desktop');
?>

<div
    class="hero pt-[5.875rem] md:pt-[94px] xl:pt-[165px] py-5 flex-col px-5 flex items-center sm:px-0 xl:flex-row lg:px-[150px] lg:justify-around">
    <div
        class="hero__text flex flex-col text-center items-center lg:max-w-[545px] md:ml-[41px] md:mr-[122px] lg:ml-0 lg:mr-[71px] lg:text-left">
        <div
            class="hero__sub-title-container flex flex-col items-center mb-6 md:flex-row sm:mb-8 md:mb-[34px] lg:self-start">
            <div class="hero__stick w-3.5 h-0.5 "></div>
            <h4
                class="hero__sub-title relative mx-[4.063rem] text-sm mt-4 font-semibold md:m-0 md:ml-3 sm:drop-shadow-none lg:mt-0 lg:ml-2 lg:text-xs xl:ml-[26px]">
                <?php echo $sub_title; ?></h1>
            </h4>
        </div>
        <h1
            class="hero__title leading-10 tracking-[0.2px] px-10 md:px-5 lg:px-0 text-[2rem] font-bold sm:text-[56px] sm:leading-[4.25rem]">
            <?php echo $hero_title; ?></h1>
        <p class="hero__description small-text mt-6 px-3.5 md:px-6 lg:px-0 xl:pr-10 sm:mt-[26px] lg:mt-8">
            <?php echo $text; ?></p>
        <form
            class="hero__form flex flex-col px-2 md:ml-[24px] md:mr-[26px] sm:flex-row items-center sm:justify-center md:justify-start mt-[30px] sm:mt-[42px] lg:mt-10">
            <input class="indent-3 sm:indent-5 sm:min-w-[429px] sm:h-[58px]" placeholder="name@youremail.com" />
            <button
                class="btn btn--action hero__form font-bold mt-5 px-[5.813rem] py-[9px] sm:mt-0 sm:px-6 sm:py-[18px] ">Subscribe</button>
        </form>

    </div>
    <div class="hero__img mt-10 sm:mt-16 md:ml-[81px] md:mr-[163px] lg:ml-0 lg:mr-0 xl:mt-0">

        <picture>
            <source media="(min-width: 400px)" srcset="<?php echo $imageDesktop; ?>">
            <img src=" <?php echo $imageMobile; ?>">

        </picture>
    </div>
</div>