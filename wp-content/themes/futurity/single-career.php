<?php get_header(); ?>
<div class="bl-blog-detail">
    <div class="container">
        <?php while ( have_posts() ) : the_post();  ?>
        <div class="row">
            <div class="col-md-12">
                <div class="bl-blog-detail-title">
                    <h4><?php the_tags("", '', '');?></h4>
                    <h1><?php the_title();?></h1>
                    <h5><span class="user-detail"><?php echo __( 'by', 'tsg' ). ' '; the_author();?></span><span class="time-detail"> <?php echo __( 'Posted on', 'tsg' ). ' '; the_date()?></span></h5>
                </div>
                <div class="main-content">
                    <?php the_content(); ?>
                </div>
                <div class="bl-blog-detail-relate row">
                    <div class="col-md-6 col-xs-6 tags"> <?php the_tags(__('View posts by tags: '), '', '');?></div>
                    <div class="social-sharing"> <?php echo __( 'SHARE ') ?>
                        <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
<!--                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--                        <div class="addthis_sharing_toolbox"></div>-->
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
