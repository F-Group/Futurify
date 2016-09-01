<?php get_header(); ?>
<?php $img = get_field("title_image"); ?>
<?php if(!empty($img)) : ?>
<img class="img-responsive img-banner" src="<?php echo $img ?>" alt="blog-img">
<?php endif; ?>
<div class="bl-blog-detail">
    <div class="container">
        <?php while ( have_posts() ) : the_post();  ?>
        <div class="row">
            <div class="col-md-12">
                <div class="bl-blog-detail-title">
                    <h4><?php the_tags("", '', '');?></h4>
                    <h1><?php the_title();?></h1>
                    <h5 class="author-info"><span class="user-detail"><?php echo __( 'by', 'tsg' ). ' '; the_author();?></span><span class="time-detail"> <?php echo __( 'Posted on', 'tsg' ). ' '; the_date()?></span></h5>
                </div>
                <div class="main-content">
                    <?php the_content(); ?>
                </div>
                <div class="bl-blog-detail-relate row">
                    <div class="col-md-6 col-xs-12 tags"> <?php the_tags(__('View posts by tags: '), '', '');?></div>
                    <div class="col-md-6 col-xs-12" style="padding: 0">
                        <ul class="social-sharing addthis_toolbox addthis_default_style">
                            <li><span>Share</span></li>
                            <li><a href="#" class="addthis_button_facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="addthis_button_twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="addthis_button_linkedin"><i class="fa fa-linkedin "></i></a></li>
                            <li><a href="#" class="addthis_button_google_plusone_share"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="addthis_button_pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
            // End of the loop.
        endwhile;
        get_template_part("parts/part", "related-blog"); ?>
    </div>
</div>
<?php get_footer(); ?>
