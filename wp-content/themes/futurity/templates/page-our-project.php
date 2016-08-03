<?php
/**
 * Template Name: Page Our Project template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

$projects = getList("project", "menu_order date");


?>
<div class="bl-our-project">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bl-our-project-title">
                    <h1>OUR PROJECTS</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bl-our-project-items clearfix">
                <?php if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post(); ?>
                    <?php
                        if(has_post_thumbnail()) {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="bl-our-project-item">
                            <a href="<?php the_permalink() ?>"><img class="img-responsive" src="<?php the_post_thumbnail_url("full"); ?>" alt="project-img"></a>
                        </div>
                    </div>
                    <?php
                     } else {
                    ?>
                    <div class=" col-xs-12 col-sm-12 col-md-8">
                        <?php the_content(); ?>
                    </div>
                    <?php } ?>

                <?php endwhile; ?>
                <?php endif; ?>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="bl-our-project-button-more">
                            <button id="btn-project-more">
                                <h5><span>SEE MORE ONGOING<br>PROJECTS..</span></h5>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="project-des">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row gutter">
        <div class="bl-our-project-donate clearfix">
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="bl-our-project-donate-item">
                        <a href="#"><img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/donate-1.png' ;?>" alt="project-img"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="bl-our-project-donate-item">
                        <a href="#"><img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/donate-2.png' ;?>" alt="project-img"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="bl-our-project-donate-item">
                        <a href="#"><img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/donate-3.png' ;?>" alt="project-img"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 two-donate">
                    <div class="container">
                        <div class="colxs-12 col-sm-6 col-md-6">
                            <div class="bl-our-project-donate-item">
                                <a href="#"><img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/donate-4.png' ;?>" alt="project-img"></a>
                            </div>
                        </div>
                        <div class="colxs-12 col-sm-6 col-md-6">
                            <div class="bl-our-project-donate-item">
                                <a href="#"><img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/donate-5.png' ;?>" alt="project-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 bl-our-project-success ">
            <div class="bl-our-project-success-content">
                <h1>WE ARE PASSIONATE ABOUT MAKING PEOPLE WHO WE WORK WITH SUCCESS</h1>
                <button class="btn-about-us">LEARN ABOUT US!</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
