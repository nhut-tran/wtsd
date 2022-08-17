<?php

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}


$tips_title = get_field('suggestion_title');
?>

<section class="suggestion mt-[72.5px] md:mt-[80.5px] lg:mt-[100px] md:px-[63px] lg:px-[230px]">
    <div class="grid w-full grid-cols-[280px] justify-center gap-[64px]
                md:grid-cols-2 md:grid-rows-[min-content_max-content_max-content] md:gap-x-[64px] md:gap-y-[0px]
                lg:grid-cols-2 lg:grid-rows-[min-content_max-content_max-content] lg:gap-x-[136px]">
        <h1
            class="text-3xl text-center tracking-[0.2px] md:col-span-2 mx-auto font-bold mb-[-9px] px-5 sm:text-left md:ml-0 md:text-[40px] leading-[52px] lg:text-5xl max-w-[280px] md:pl-0  md:max-w-[522px] md:mb-[72px] xl:mb-[81px]">
            <?php echo $tips_title ?></h1>
        <?php if (have_rows('suggestion_text_box')) : ?>

        <?php while (have_rows('suggestion_text_box')) : the_row(); ?>

        <div
            class="suggestion__text-box flex <?php $index = get_row_index();
                                                        echo  $index % 2 == 0 ? 'md:pt-[72px] lg:pt-[135px]' : ''  ?> flex-col items-center justify-start text-center min-h-[405px] sm:text-left">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php the_sub_field('suggestion_text_box_image_desktop'); ?>">
                <source media="(min-width: 640px)" srcset="<?php the_sub_field('suggestion_text_box_image_tablet'); ?>">
                <img src="<?php the_sub_field('suggestion_text_box_image_mobile'); ?>">
            </picture>
            <div>
                <h4 class="text-[22px] leading-8 mb-3.5 mt-8 font-semibold md:mb-3 lg:text-[24px] lg:mb-4">
                    <?php the_sub_field('suggestion_text_box_title'); ?>
                </h4>
                <p
                    class="text-sm sm:text-base mx-5 leading-6 sm:mx-0 sm:leading-7 sm:max-w-[266px] lg:max-w-[346px] sm:self-start">
                    <?php the_sub_field('suggestion_text_box_text'); ?>
                </p>
            </div>
        </div>
        <?php endwhile; ?>

        <?php else : ?>
        <div></div>
        <?php endif; ?>
        <!-- <div
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
            class="suggestion__text-box flex flex-col items-center text-center justify-center sm:text-left">
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
    </div> -->
</section>