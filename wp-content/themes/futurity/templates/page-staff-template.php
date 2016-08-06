<?php
/**
 * Template Name: Page Staff template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

$staff = getList("staff", "menu_order date");

?>
<div class="bl-staff" data-spy="scroll" data-target="#myScrollspy">
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
                        $num = 0; $total = $staff->found_posts; $prefix_id = "step";
                        if( $staff->have_posts() ) {
                            while ($staff->have_posts()) : $staff->the_post();
                                $num++;
                                ?>
                                <div id="<?php echo $prefix_id.$num ?>" class="staff-step-content">
                                    <h5><?php echo $num.'/'.$total ?></h5>
                                    <h1><?php the_title() ?></h1>
                                    <?php the_content() ?>
                                </div>
                                <?php
                            endwhile;
                        }

                        ?>
                    </div>
                    <ul id="myScrollspy" data-offset-top="200" data-offset-bottom="1200" data-spy="affix" class="col-xs-12 col-sm-4 col-md-4 nav navbar">
                        <?php
                        $num = 0;
                        if( $staff->have_posts() ) {
                            while ($staff->have_posts()) : $staff->the_post();
                                $num++;
                                ?>
                                <li class="staff-phase ">
                                    <a href="<?php echo '#'.$prefix_id.$num ?>">
                                        <img class="img-responsive normal" src="<?php echo get_field("normal_icon") ?>" alt="staff-phase">
                                        <img class="img-responsive hover" src="<?php echo get_field("hover_icon") ?>" alt="staff-phase">
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
                <?php wp_reset_query(); ?>
                <?php $url = get_field("button_link") ?>
                <h1><?php echo get_field("block_text") ?></h1>
                <button><a href="<?php if(!empty($url)) {echo $url["url"];} ?>"><?php echo get_field("button_text") ?></a></button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
