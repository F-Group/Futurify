<?php 
/**
 * Template Name: Page case template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

$projects = getList("project", "menu_order date");
?>
<div class="block">
	<div class="bl-case">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-xs-12 col-sm-12 col-md-12">
                <div class="bl-case-title">
                    <h1 class="black-title">MINIMUM VIABLE PRODUCT (case)</h1>
                </div>
            </div>
            <div class="case-steps clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="case-step-content ">
                        <h5>4/5</h5> 
                        <h1>$7000</h1>
                        <div class="case-step-content-des">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <p>Wanna develop a new idea or improve on the existing software? Although your organization have their internal development team or not, our honest, quick-witted and hard-working will help you to fulfill your needs to accomplish high-functioning products. </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                            </div>
                        </div>
                    </div>
                    <div class="case-step-content">
                        <h5>4/5</h5>
                        <h1>6 WEEKS</h1>
                        <div class="case-step-content-des">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <p>Wanna develop a new idea or improve on the existing software? Although your organization have their internal development team or not, our honest, quick-witted and hard-working will help you to fulfill your needs to accomplish high-functioning products. </p>
                            </div>
                        </div>
                    </div>
                    <div class="case-step-content">
                        <h5>4/5</h5>
                        <h1>5 PEOPLE</h1>
                        <div class="case-step-content-des">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <p>Wanna develop a new idea or improve on the existing software? Although your organization have their internal development team or not, our honest, quick-witted and hard-working will help you to fulfill your needs to accomplish high-functioning products. </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <h1>Wanna develop a new idea or improve on the existing software? Although your organization have their internal development team or not, our honest, quick-witted</h1>
                                <h5>JOHN VU - PRODUCT MANANGER</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                            </div>
                        </div>
                    </div>
                    <div class="case-step-content">
                        <h1>5 PEOPLE</h1>
                        <div class="case-step-content-des">
                            <div class="masonry-case">
                                <div class="grid-sizer"></div>
                                <div class="gutter-sizer"></div>
                                <div class="grid-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                                </div>
                                <div class="grid-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                                </div>
                                <div class="grid-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                                </div>
                                <div class="grid-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                                </div>
                                <div class="grid-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="case-view clearfix">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <button>Vist the site</button>
                    </div>
                    <div class="col-md-6">
                        <div class="case-social">
                            <span>Share</span>
                            <ul>
                                <li>1</li>
                                <li>1</li>
                                <li>1</li>
                                <li>1</li>
                                <li>1</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part("parts/part", "related-project"); ?>
            <div class="case-feel clearfix">
                <div class="col-md-12">
                    <div class="case-feel">
                        <h1>still hungry ?</h1>
                        <button>Feeding Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>
