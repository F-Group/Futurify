<?php

get_header();

$projects = getList("project", "menu_order date");


?>
<div class="bl-mvp">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-xs-12 col-sm-12 col-md-12">
                <div class="bl-mvp-title">
                    <h1 class="black-title">MINIMUM VIABLE PRODUCT (MVP)</h1>
                    <p>Wanna develop a new idea or improve on the existing software? Although your organization have their internal development team or not, our honest, quick-witted and hard-working will help you to fulfill your needs to accomplish high-functioning products. </p>
                </div>
            </div>
            <div class="mvp-steps clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="mvp-step-content">
                            <h1>$7000</h1>
                            <p>We offer the affordable cost for passionate, committed and serious entrepreneurs who think long term relationship with their customers as well as their development</p>
                        </div>
                        <div class="mvp-step-content">
                            <h1>6 WEEKS</h1>
                            <span class="red-text">Our development schedule is designed to fix 6 weeks </span>
                            <span class="red-text">perfectly in order to build a reliable, innovative and scalable </span>
                            <p>Week 1: requirement gathering, system architecture design and preliminary research  </p>
                            <p> Week 2 - 3 (Iteration #1): implement core functionalities   </p>
                            <p>Week 4 - 5 (Iteration #2): improve and implement the remaining features </p>
                            <p>  Week 6: launch and maintenance </p>
                        </div>
                        <div class="mvp-step-content">
                            <h1>5 PEOPLE</h1>
                            <p>1 leader who is strong, decisive, open minded, know to deal in truth and would be a process guru. This leader understand clients needs and gather information to transfer to team members.  </p>
                            <p>1 Designer with creative mind, co-operative to work closely with other members and patient to adjust their design to finalize the best one.</p>
                            <p>2 developers with passion in programming, desire to improve skills, logical thinker to figure out solution to problems. Their important traits help them implement MVP's functionalities. </p>
                            <p>1 Qa with analytical thinking, strong communication skill, willing to ask question, technical ability and have a point of view of the end user in order to test functionalities as well as review bugs</p>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="mvp-phase">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/mvp/red-tag.png' ;?>" alt="mvp-phase">
                            <h4>$7000</h4>
                        </div>
                        <div class="mvp-phase">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/mvp/red-calendar.png' ;?>" alt="mvp-phase">
                            <h4>6 WEEKS</h4>
                        </div>
                        <div class="mvp-phase">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/mvp/red-tshirt.png' ;?>" alt="mvp-phase">
                            <h4>5 PEOPLE</h4>
                        </div>
                        <div class="mvp-phase">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/mvp/red-steps.png' ;?>" alt="mvp-phase">
                            <h4>4 STEPS<br> DEVELOPMENT <br>METHOD</h4>
                        </div>
                        <div class="mvp-phase">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/mvp/red-browser.png' ;?>" alt="mvp-phase">
                            <h4>3 STEPS TO WRITE RELIABLE CODES (TDD)</h4>
                        </div>
                        <div class="mvp-phase">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/mvp/red-magnifying.png' ;?>" alt="mvp-phase">
                            <h4>2 PEOPLES<br>CROSS CHECK CODE </h4>
                        </div>
                        <div class="mvp-phase">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/mvp/red-star.png' ;?>" alt="mvp-phase">
                            <h4>BEST MVP</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
