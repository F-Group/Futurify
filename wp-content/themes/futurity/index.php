<?php
get_header();
$videos = getList("home-video", "menu_order date");
?>
<div id="homePage">
<?php if ($videos->have_posts()) : while ($videos->have_posts()) : $videos->the_post(); ?>
    <section class="section">
        <div class="fp-table">
            <div class="fp-tableCell">
                <video src="<?php echo get_field("video"); ?>"></video>
                <div class="caption">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>
    <section class="section home-introduction">
        <div class="container">
            <div class="col-xs-12 col-md-3">
                <div content="row">
                    <h1 class="action-call-title">WE'RE EXCITED TO LEARN MORE ABOUT YOU AND YOUR NEEDS</h1>
                </div>
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="flex action-call">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-1">
                        <?php if(has_post_thumbnail()) { ?>
                        <img class="img-responsive" src="<?php the_post_thumbnail("full") ?>">
                        <?php } else { ?>
                        <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/content/home/home-introdution-img.png">
                        <?php } ?>
                    </div>
                    <div class="col-2 flex">
                        <div class="panel-action">
                            <!--<img class="img-responsive" src="<?php /*bloginfo('template_url') */?>/img/content/home/white-line-background.png">-->

                                <?php the_content(); ?>

                        </div>
<!--                        <div class="panel-frame"></div>-->
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!--<div class="row introduction-img clearfix">

                </div>
                <div class="row introduction-panel">
                    <div class="col-md-7">
                        <img class="panel-frame img-responsive" src="<?php /*bloginfo('template_url') */?>/img/content/home/white-line-background.png">-->
                        <!--<div class="panel-chat vertical-center-Y">
                            <form class="panel-content">
                                <h3>Let's chat and create great works together!!!</h3>
                                <p>Hello, my name is</p>
                                <input type="text" class="input-style">
                                <p>Reach me at this email</p>
                                <input type="email" class="input-style">
                                <p>And have conversation of my concern about</p>
                                <input type="text" class="input-style">
                                <div class="form-btn"><button class="btn-play1"></button></div>
                            </form>
                        </div>-->
                    <!--</div>
                </div>-->
            </div>
        </div>
    </section>
    <section class="section fp-auto-height home-footer">
        <?php get_template_part("parts/part", "footer") ?>
    </section>
</div>
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body> <!--end body-->
</html> <!--end html -->