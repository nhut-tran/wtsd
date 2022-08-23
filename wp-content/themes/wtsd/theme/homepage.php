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
        get_template_part('template-parts/content/homepage', 'page');
    ?>

        <section class="contact">
            <div class="contact-form mt-4">
                <?php echo do_shortcode('[gravityform id="3" title="true"]'); ?>
            </div>
        </section>
    <?php if (comments_open() || get_comments_number()) : comments_template();
        endif;
    endwhile; // End of the loop.
    ?>





</main><!-- #main -->
<?php
get_footer(); ?>