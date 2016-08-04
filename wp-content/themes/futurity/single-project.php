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
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="bl-case-title">
                        <h1 class="black-title">SMART PROPOSITITION</h1>
                    </div>
                </div>
                <div class="case-steps clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="case-step-content ">
                            <h5>1/4</h5> 
                            <h1>THE CHALLENGE</h1>
                            <div class="case-step-content-des clearfix">
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
                            <h5>2/4</h5>
                            <h1>OUR APPROACH</h1>
                            <div class="case-step-content-des clearfix">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <p>We gonna tell you a story about Futurify where we call our second home.  Say hello with a young software engineer, Tri Ho, version 2012. After 3 years of working for University of Ottawa while studying and 8 months at Koneka after graduation as a web developer, he went back to Vietnam. Flame of desire and passion of youth inspirit him to build something.</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <h1>“The FUTURIFY team refined our brand, created a rockin' style guide and brand book, and designed a web site that we're extremely proud of.”</h1>
                                    <h4>JOHN VU - PRODUCT MANANGER</h4>
                                </div>
                            </div>
                        </div>
                        <div class="case-step-content">
                            <h5>3/4</h5>
                            <h1>THE RESULT</h1>
                            <div class="case-step-content-des clearfix">
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
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <a href="#"><button>Vist the site</button></a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="case-social">
                                <span>Share</span>
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin "></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
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
                <div class="case-feel">
                    <h1>still hungry ?</h1>
                    <a href="#"><button>Feeding Now!</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
