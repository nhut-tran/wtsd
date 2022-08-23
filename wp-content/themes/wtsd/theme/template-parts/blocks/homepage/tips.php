<?php

$tips_title = get_field('tips_title');
?>

<section class="tips mt-[54px] px-[20px] md:pr-[38px] md:pl-[45px] sm:px-0">
    <div class="grid w-full grid-cols-[280px] grid-rows-[min-content_286px_286px_286px] justify-center gap-[25px]
                md:grid-cols-[330px_330px] md:grid-rows-[min-content_354px_354px] md:gap-y-[0px] md:gap-x-[25px]
                lg:grid-cols-[440px_440px] lg:grid-rows-[min-content_389px_389px] lg:md:gap-x-[30px]">
        <h1
            class="text-3xl text-center9 md:col-span-2 mx-auto font-bold mb-2 sm:text-left md:ml-0 md:text-[40px] leading-[52px] lg:text-5xl max-w-[280px] md:pr-14 md:max-w-[502px] md:mb-14 xl:mb-16">
            <?php echo $tips_title ?></h1>
        <?php if (have_rows('tips_text_box')) : ?>

        <?php while (have_rows('tips_text_box')) : the_row(); ?>

        <div class="tips__text-box">
            <picture>
                <source media="(min-width: 900px)" srcset="<?php the_sub_field('tips_text_box_image_desktop'); ?>">
                <source media="(min-width: 400px)" srcset="<?php the_sub_field('tips_text_box_image_tablet'); ?>">
                <img src="<?php the_sub_field('tips_text_box_image_mobile'); ?>">
            </picture>

            <h4 class="text-base font-semibold mb-[9px] mt-3 leading-5">
                <?php the_sub_field('tips_text_box_title'); ?>
                <h4>
                    <p class="text-sm leading-6"><?php the_sub_field('tips_text_box_text'); ?>
                    </p>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <div></div>
        <?php endif; ?>
    </div>
</section>