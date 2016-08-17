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
    <section class="section home-introduction">
        <div class="home-ft">
            <div class="container">
                <div class="col-xs-12 col-md-3">
                    <div content="row">
                        <h1 class="action-call-title">WE'RE EXCITED TO LEARN MORE ABOUT YOU AND YOUR NEEDS</h1>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9">
                    <div class="flex action-call">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-1">
                                <?php if(has_post_thumbnail()) { ?>
                                    <img class="img-responsive desktop" src="<?php the_post_thumbnail_url("full") ?>">
                                    <img class="img-responsive mobile" src="<?php echo get_field("image_mobile") ?>">
                                <?php } else { ?>
                                    <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/content/home/home-introdution-img.png">
                                <?php } ?>
                            </div>
                            <div class="col-2 flex">
                                <div class="panel-action">
                                    <!--<img class="img-responsive" src="<?php /*bloginfo('template_url') */?>/img/content/home/white-line-background.png">-->
                                    <form action="<?php echo get_field("link") ?>">
                                        <?php the_content(); ?>
                                        <div class="form-btn"><button class="btn-play1"></button></div>
                                    </form>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft">
            <?php get_template_part("parts/part", "footer") ?>
        </div>
    </section>
</div>
<?php
    get_footer();
?>
