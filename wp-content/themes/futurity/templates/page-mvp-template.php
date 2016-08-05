<?php
/**
 * Template Name: Page MVP template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

$mvp = getList("mvp", "menu_order date");

?>
<div class="bl-staff bl-mvp" data-spy="scroll" data-target="#myScrollspy2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-xs-12 col-sm-12 col-md-12">
                <div class="bl-staff-title">
                    <?php
                    if(have_posts() ) {
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    }
                    ?>
                </div>
            </div>
            <div class="staff-steps clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <?php
                        $num = 0; $prefix_id = "step";
                        if( $mvp->have_posts() ) {
                            while ($mvp->have_posts()) : $mvp->the_post();
                                $num++;
                                ?>
                                <div id="<?php echo $prefix_id.$num ?>" class="staff-step-content">
                                    <h1><?php the_title() ?></h1>
                                    <?php the_content() ?>
                                </div>
                                <?php
                            endwhile;
                        }
                        ?>
                    </div>
                    <ul id="myScrollspy2" data-offset-top="270" data-offset-bottom="1200" data-spy="affix" class="col-xs-12 col-sm-4 col-md-4 nav navbar">
                        <?php
                        $num = 0;
                        if( $mvp->have_posts() ) {
                            while ($mvp->have_posts()) : $mvp->the_post();
                                $num++;
                                ?>
                                <li class="mvp-phase">
                                    <a href="<?php echo '#'.$prefix_id.$num ?>">
                                        <img class="img-responsive normal" src="<?php echo get_field("normal_icon") ?>" alt="mvp-phase">
                                        <img class="img-responsive hover" src="<?php echo get_field("hover_icon") ?>" alt="mvp-phase">
                                        <h4><?php the_title() ?></h4>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php get_template_part("parts/part", "related-project"); ?>
        </div>
    </div>
    <div class="staff-line clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="staff-line-des">
                <h1>IF YOU ARE A SUCCESS HUNGER, WE ARE MVP BUILDERS.<br>FUTURIFY EMPOWERS FUTURE OF YOUR BUSINESS.</h1>
                <button>WE’RE READY!</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
