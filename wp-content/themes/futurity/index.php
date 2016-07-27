<?php get_header(); ?>
<section id="carousel-example-vertical" class="section carousel vertical slide">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <video src="<?php bloginfo('template_url') ?>/demo_video.mp4" autoplay></video>
            <div class="caption">
                <h2>OUR MISSION</h2>
                <p>We offer remote world-class engineers and build reliable, scalable and measurable solutions to help you grow and succeed</p>
            </div>
        </div>
        <div class="item">
            <video src="<?php bloginfo('template_url') ?>/demo_video.mp4" autoplay></video>
            <div class="caption">
                <h2>OUR MISSION</h2>
                <p>We offer remote world-class engineers and build reliable, scalable and measurable solutions to help you grow and succeed</p>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<section class="home-introduction">
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
<?php get_footer(); ?>