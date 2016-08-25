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
                    <h1 class="black-title"><?php echo get_field("top_title") ?></h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="bl-about-content clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <?php echo get_field("e_top_left") ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <?php echo get_field("e_top_right") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-about-des">
        <div class="bl-about-des-img">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row"><a href="#"><img class="img-responsive" src="<?php echo get_field("image_top") ?>" alt="about-img"></a></div>
                </div>
            </div>
        </div>
        <div class="bl-about-des-content">
            <div class="container">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <?php echo get_field("e_middle_left") ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <?php echo get_field("e_middle_right") ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-about-main-people">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="bl-about-main-people-img">
                    <img class="img-responsive" src="<?php echo get_field("image_middle") ?>" alt="about-img">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="bl-about-main-people-des">
                    <?php echo get_field("e_middle") ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-about-teams">
        <div class="bg-pattern"></div>
        <div class="container">
            <h1 class="white-title">OUR TEAM</h1>
        </div>
        <div class="container">
            <div class="row">
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
                            <div class="member-name"><?php the_title() ?></div>
                            <div class="member-position"><?php the_field("position") ?></div>
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
            <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
    </div>
    <div class="bl-about-our-mission">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-md-5 no-p-l">
                        <div class="bl-about-our-mission-img">
                            <img class="img-responsive" src="<?php echo get_field("image_bottom") ?>" alt="about-img">
                        </div>
                    </div>
                    <div class="col-md-7 mb-no-p-l no-p-r">
                        <?php echo get_field("editor_bottom") ?>
                        <!--<div class="bl-about-our-mission-content">
                            <h1 class="black-title">OUR MISSION</h1>
                            <p>Our focus is to build highly <span>innovative</span>,   <span>interactive</span>    <span>reliable</span> web-based solutions to bring maximum values to our clients and users on time and on budget.</p>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
