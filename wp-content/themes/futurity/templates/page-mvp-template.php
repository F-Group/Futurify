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
<div class="bl-staff">
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
                    <ul class="col-xs-12 col-sm-4 col-md-4 nav navbar">
                        <?php
                        $num = 0;
                        if( $mvp->have_posts() ) {
                            while ($mvp->have_posts()) : $mvp->the_post();
                                $num++;
                                ?>
                                <li class="staff-phase">
                                    <a href="<?php echo '#'.$prefix_id.$num ?>">
                                        <img class="img-responsive" src="<?php echo get_field("normal_icon") ?>" alt="staff-phase">
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
                <h1>TO START A <span>PROJECT </span>,<span> DROP US </span> A LINE</h1>
                <button>WE’RE READY!</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
