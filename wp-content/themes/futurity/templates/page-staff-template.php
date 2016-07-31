<?php
/**
 * Template Name: Page Staff template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

$projects = getList("project", "menu_order date");


?>
<div class="bl-staff">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-xs-12 col-sm-12 col-md-12">
                <div class="bl-staff-title">
                    <h1 class="black-title">STAFFING</h1>
                    <p>Wanna develop a new idea or improve on the existing software? Although your organization have their internal development team or not, our honest, quick-witted and hard-working will help you to fulfill your needs to accomplish high-functioning products.</p>
                </div>
            </div>
            <div class="staff-steps clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div id="step1" class="staff-step-content">
                            <h5>1/5</h5>
                            <h1>MODELS</h1>
                            <p>We offer world-class engineers who work as Part-time (Pay as you go) or Full-time (Monthly subscription) remote staffs. Our talented engineers will work closely with your team to not only finish the assigned tasks, but also drive workflow right away.</p>
                        </div>
                        <div id="step2" class="staff-step-content">
                            <h5>2/5</h5>
                            <h1>TALENTED ENGINEERS</h1>
                            <p>We offer world-class engineers who work as Part-time (Pay as you go) or Full-time (Monthly subscription) remote staffs. Our talented engineers will work closely with your team to not only finish the assigned tasks, but also drive workflow right away.</p>
                        </div>
                        <div id="step3" class="staff-step-content">
                            <h5>3/5</h5>
                            <h1>TECHNOLOGIES & TOOLS</h1>
                            <span>Our developers operate on these 3 attributes</span>
                            <p>We offer world-class engineers who work as Part-time (Pay as you go) or Full-time (Monthly subscription) remote staffs. Our talented engineers will work closely with your team to not only finish the assigned tasks, but also drive workflow right away.</p>
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="staff-img">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="staff-img">
                        </div>
                        <div id="step4"  class="staff-step-content">
                            <h5>4/5</h5>
                            <h1>UP - TO - DATE</h1>
                            <p>We offer world-class engineers who work as Part-time (Pay as you go) or Full-time (Monthly subscription) remote staffs. Our talented engineers will work closely with your team to not only finish the assigned tasks, but also drive workflow right away.</p>
                        </div>
                        <div id="step5"  class="staff-step-content">
                            <h5>5/5</h5>
                            <h1>WHICH MODEL IS SUITABLE FOR YOUR BUSINESS?</h1>
                            <p>We offer world-class engineers who work as Part-time (Pay as you go) or Full-time (Monthly subscription) remote staffs. Our talented engineers will work closely with your team to not only finish the assigned tasks, but also drive workflow right away.</p>
                        </div>
                    </div>
                    <ul class="col-xs-12 col-sm-4 col-md-4 nav navbar">
                        <li class="staff-phase">
                            <a href="#step1">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/staff/line-models.png' ;?>" alt="staff-phase">
                                <h4>MODELS</h4>
                            </a>
                        </li>
                            </a>
                        <li class="staff-phase">
                            <a href="#step2">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/staff/line-star-talented.png' ;?>" alt="staff-phase">
                                <h4>TALENTED ENGINEERS</h4>
                            </a>
                        </li>
                        <li class="staff-phase">
                            <a href="#step3">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/staff/line-gear.png' ;?>" alt="staff-phase">
                                <h4>TECHNOLOGIES & TOOLS</h4>
                            </a>
                        </li>
                        <li class="staff-phase">
                            <a href="#step4">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/staff/line-repeat.png' ;?>" alt="staff-phase">
                                <h4>UP - TO - DATE</h4>
                            </a>
                        </li>
                        <li class="staff-phase">
                            <a href="#step5">
                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/staff/line-hand.png' ;?>" alt="staff-phase">
                                <h4>YOUR CHOICE</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php get_template_part("parts/part", "related-project"); ?>
        </div>
    </div>
    <div class="staff-line clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="staff-line-des">
                <h1>TO START A <span>PROJECT </span>,<span> DROP US </span> A LINE</h1>
                <button>WE’RE READY!</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
