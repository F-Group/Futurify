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
                    <?php echo get_field("caption"); ?>
                    <div class="btn-video-play"></div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>
    <!--<section class="section">
        <div class="fp-table">
            <div class="fp-tableCell">
                <video src="<?php /*bloginfo('template_url') */?>/video/video-2.mp4" autoplay></video>
                <div class="caption">
                    <div class="caption-content">
                        <h2>OUR MISSION</h2>
                        <p>We offer remote world-class engineers and build reliable, scalable and measurable solutions to help you grow and succeed</p>
                    </div>
                    <div class="btn-video-play"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="fp-table">
            <div class="fp-tableCell">
                <video src="<?php /*bloginfo('template_url') */?>/video/video-3.mp4" autoplay></video>
                <div class="caption">
                    <div class="caption-content">
                        <h2>OUR MISSION</h2>
                        <p>We offer remote world-class engineers and build reliable, scalable and measurable solutions to help you grow and succeed</p>
                    </div>
                    <div class="btn-video-play"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="fp-table">
            <div class="fp-tableCell">
                <video src="<?php /*bloginfo('template_url') */?>/video/video-4.mp4" autoplay></video>
                <div class="caption">
                    <div class="caption-content">
                        <h2>OUR MISSION</h2>
                        <p>We offer remote world-class engineers and build reliable, scalable and measurable solutions to help you grow and succeed</p>
                    </div>
                    <div class="btn-video-play"></div>
                </div>
            </div>
        </div>
    </section>-->
    <section class="section home-introduction fp-auto-height">
        <div class="container">
            <div class="col-sm-3">
                <div content="row">
                    <h1>WE'RE EXCITED TO LEARN MORE ABOUT YOU AND YOUR NEEDS</h1>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="row introduction-img">
                    <img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/content/home/home-introdution-img.png">
                </div>
            </div>
            <div class="col-sm-4 home-panel">
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
</div>
<?php get_footer(); ?>