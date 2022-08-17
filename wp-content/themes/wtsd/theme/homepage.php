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

        <?php include 'template-parts/blocks/homepage/connect.php' ?>
        <!--connect end-->
        <!--tips start-->
        <?php include 'template-parts/blocks/homepage/tips.php' ?>
        <!--tips end -->
        <!--suggestion start-->
        <?php include 'template-parts/blocks/homepage/suggestion.php' ?>
        <!--suggestion end -->
        <?php include 'template-parts/blocks/homepage/slider.php' ?>
        <!--slider start -->
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