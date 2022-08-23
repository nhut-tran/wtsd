<?php
$className = "connect";
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}


$connect_title = get_field('connect_title');
$small_text = get_field('small_text');
$image_mobile = get_field('connect_image_mobile');
$image_tablet = get_field('connect_image_tablet');
$image_desktop = get_field('connect_image_desktop');
?>

<section class="connect mt-24 sm:px-5 md:px-10 lg:px-0 flex flex-col items-center">
    <div class="connect__text text-center order-1 self-start flex flex-col md:w-full sm:text-left lg:flex-row">
        <h1 class="connect__title text-[28px] px-10  leading-9 font-bold mb-7 xl:mr-[83px] md:text-[40px] sm:text-[40px] sm:px-0 sm:leading-[52px] xl:text-5xl xl:leading-[60px]">
            <?php echo $connect_title ?></h1>
        <p class="connect__description small-text md:pr-[7.6rem] lg:pr-0 xl:max-w-[390px] lg:text-justify">
            <?php echo $small_text ?></p>
    </div>
    <div class="connect__dashboard flex justify-center mt-6  order-2 md:order-last lg:order-2 lg:mt-[72px] md:mt-9">

        <picture>
            <source media="(min-width: 900px)" srcset="<?php echo $image_desktop ?>">
            <source media="(min-width: 400px)" srcset="<?php echo $image_tablet ?>">
            <img src="<?php echo $image_mobile ?>">
        </picture>

    </div>

    <div class="connect__text-box mt-[23.38px] px-[3.47px] md:px-0 order-3 grid gap-x-2.5 md:order-2 lg:order-last sm:gap-x-5 grid-cols-1 sm:grid-cols-3  md:mt-6 lg:mt-14">

        <?php if (have_rows('text_box')) : ?>

            <?php while (have_rows('text_box')) : the_row(); ?>

                <div class="text-box pl-6 pr-5 pt-4 pb-5 md:pt-5 lg:pt-4">
                    <h2 class="text-box__title lg:text-[2rem] text-[24px] leading-8 lg:leading-10 font-bold"><?php the_sub_field('text_box_title'); ?></h2>
                    <h4 class="text-base font-semibold mb-[9px] mt-3 leading-5"><?php the_sub_field('text_box_sub_title'); ?></h4>
                    <p class="text-sm leading-6"><?php the_sub_field('text_box_text'); ?></p>
                </div>
            <?php endwhile; ?>

        <?php else : ?>
            <div class="text-box pl-6 pr-5 pt-4 pb-5 md:pt-5 lg:pt-4"></div>
        <?php endif; ?>

    </div>
</section>