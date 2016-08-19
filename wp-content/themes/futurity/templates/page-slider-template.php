<?php
/**
 * Template Name: Page Slider template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
?>
<div id="sliderPage">
    <section class="section">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
</div>
<?php
    get_footer();
?>
