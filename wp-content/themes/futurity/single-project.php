<?php
get_header();

$steps = array();
$num = 0;

for($x = 0; $x < 4; $x++) {
    $title = get_field("step_title_s".($x+1));
    if(!empty($title)) {
        $steps[$num++] = $title;
    }
}

?>
<div class="block">
    <div class="bl-case">
        <div class="container">
            <div class="">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="bl-case-title">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php
                                $title = get_field("display_title");
                                if(!empty($title)) {
                                    echo '<div class="row">'.$title.'</div>';
                                } else {
                            ?>
                            <div class="row">
                                <h1 class="black-title"><?php the_title() ?></h1>
                            </div>
                        <?php } endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="case-steps clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row">
                            <div class="case-step-content ">
                                <h5>1/4</h5>
                                <div class="case-step-content-des clearfix">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <h1><?php echo get_field("step_title_s1") ?></h1>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <?php echo get_field("editor_s1") ?>
                                    </div>
                                </div>
                                <div class="case-step-content-des clearfix">
                                    <div class="hidden imgList">
                                        <?php echo get_field("editor_image") ?>
                                    </div>
                                    <div class="masonry-case">
                                        <div class="grid-sizer"></div>
                                        <div class="gutter-sizer"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="case-step-content step2">
                                <h5>2/4</h5>
                                <h1><?php echo get_field("step_title_s2") ?></h1>
                                <div class="case-step-content-des clearfix">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <?php echo get_field("editor_s2_left") ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <?php echo get_field("editor_s2_right") ?>
                                    </div>
                                </div>
                            </div>
                            <div class="case-step-content">
                                <h5>3/4</h5>
                                <h1><?php echo get_field("step_title_s3") ?></h1>
                                <div class="case-step-content-des clearfix">
                                    <div class="hidden imgList">
                                        <?php echo get_field("editor_s3") ?>
                                    </div>
                                    <div class="masonry-case">
                                        <div class="grid-sizer"></div>
                                        <div class="gutter-sizer"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="case-step-content">
                                <h5>4/4</h5>
                                <h1><?php echo get_field("step_title_s4") ?></h1>
                                <div class="case-step-content clearfix">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <?php echo get_field("editor_s4") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-view clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <?php $url = get_field('link_project_page'); ?>
                            <a href="<?php if(!empty($url)) {echo $url["url"];} else {echo '#';}?>"><button>Vist the site</button></a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="case-social">
                                <ul class="clearfix addthis_toolbox addthis_default_style">
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
                <?php get_template_part("parts/part", "related-project"); ?>
            </div>
        </div>
        <div class="case-feel clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="case-feel-in">
                    <?php wp_reset_query(); ?>
                    <?php $url = get_field("button_link") ?>
                    <h1><?php echo get_field("block_text") ?></h1>
                    <a class="hvr-ripple-out" href="<?php if(!empty($url)) {echo $url["url"];} ?>"><button><?php echo get_field("button_text") ?></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
