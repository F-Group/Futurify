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
                    <h1>WE'RE EXCITED TO LEARN MORE ABOUT YOU AND YOUR NEEDS</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-5">
                <div class="row introduction-img">
                    <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/content/home/home-introdution-img.png">
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-4 home-panel">
                <div class="row introduction-panel">
                    <img class="panel-frame img-responsive" src="<?php bloginfo('template_url') ?>/img/content/home/white-line-background.png">
                    <div class="panel-chat vertical-center-Y">
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
                    </div>
                </div>
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