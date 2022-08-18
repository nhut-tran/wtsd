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

        <?php include 'template-parts/blocks/homepage/tips.php' ?>

        <?php include 'template-parts/blocks/homepage/suggestion.php' ?>

        <?php include 'template-parts/blocks/homepage/slider.php' ?>

        <section class="contact">
            <div class="contact-form mt-4">
                <?php echo do_shortcode('[gravityform id="3" title="true"]'); ?>
            </div>
        </section>
    </div>


</main><!-- #main -->
<?php
get_footer(); ?>