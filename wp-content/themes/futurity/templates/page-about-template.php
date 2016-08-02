<?php
/**
 * Template Name: Page About Us template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

$members = getList("member", "menu_order date");
?>

<div class="bl-about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="bl-about-title">
                    <h1 class="black-title">THE FUTURIFY STORIES</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="bl-about-content clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <section class="section-left"><h2>We gonna tell you a story about Futurify where we call our second home.  Say hello with a young software engineer, Tri Ho, version 2012. After 3 years of working for University of Ottawa while studying and 8 months at Koneka after graduation as a web developer, he went back to Vietnam. Flame of desire and passion of youth inspirit him to build something.</h2></section>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <section class="section-right"><h2>“Behind every success there is a story</h2><h2>with a humble start, some failures, some</h2> <h2> successes and an ongoing happiness.”</h2>
                        <h5>JOHN VU - PRODUCT MANANGER</h5></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-about-des">
        <div class="bl-about-des-img">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="#"><img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;?>" alt="about-img"></a>
                </div>
            </div>
        </div>
        <div class="bl-about-des-content">
            <div class="container">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <section class="bl-des-left"><h2>Of course, Tri understood that he could not run a long and challenging road by himself. Dung Dang, one of his close friends since they were in high school, would be the perfect missing piece of the puzzle. Dung is a talented, quick-witted and hard-working software engineer who was working as a team lead at ELCA, a large and well-known technology company in Vietnam. However, Dung believes in the vision, “building world-class engineering team.</h2></section>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <section class="bl-des-right"><h2>A great opportunity came from his employer Koneka, who wanted to start a remote team in Vietnam at that time. With the mindset “always start with a customer”, he told himself, <span>“It's time to kickoff a new and exciting journey."</span></h2></section>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-about-main-people">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="bl-about-main-people-img">
                        <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/about/main-people.png' ;?>" alt="about-img">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="bl-about-main-people-des">
                        <div class="bl-about-main-people-des-content">
                            <h2>Having a paying customer and smart,</h2>
                            <h2> dedicated and determined founders,</h2>   
                            <h2>Futurify was formed on June 1st, 2012.</h2>
                            <h5>JOHN VU - PRODUCT MANANGER</h5>
                            <p>Not only our customers but also our members want to be successful. If our members are talented and are success hunters, our customers would be benefit from these talents tremendously. It has shown to our elite management team: Vu Le, head of Human Resource and company culture, Tan Hoang, head of outsource team, and Khoa Nguyen, head of our amazing Point of Sales system department.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-about-teams">
        <div class="container">
            <h1 class="white-title">OUR TEAM</h1>
        </div>
        <div class="container">
            <?php
            $column = 2;
            if ($members->have_posts()) : while ($members->have_posts()) : $members->the_post();
            ?>
            <?php
                if(has_post_thumbnail()) {
            ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-content">
                        <img class="img-responsive" src="<?php the_post_thumbnail_url("full"); ?>" alt="about-img">
                        <div class="member-info">
                            <div class="member-name">JOHN DOE</div>
                            <div class="member-position">Product Manager</div>
                        </div>
                    </div>
                </div>
            <?php
                } else {
                    $column = get_field("column");
            ?>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <?php the_content(); ?>
                </div>
            <?php } ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    </div>
    <div class="bl-about-our-mission">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-md-4">
                    <div class="bl-about-our-mission-img">
                        <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/about/main-people.png' ;?>" alt="about-img">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bl-about-our-mission-content">
                        <h1 class="black-title">OUR MISSION</h1>
                        <h5>JOHN VU - PRODUCT MANANGER</h5>
                        <p>Our focus is to build highly <span>innovative</span>,   <span>interactive</span>    <span>reliable</span> web-based solutions to bring maximum values to our clients and users on time and on budget.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
