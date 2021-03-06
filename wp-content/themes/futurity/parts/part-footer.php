<?php
$options = get_option("eto_settings");
?>
<footer id="footer" class="footer">
    <div class="container">
            <div class="footer-01 col-xs-12 col-md-5 hidden-xs">
                <a href="<?php echo esc_url( get_home_url() ) ?>">
                    <img class="logo" src="<?php echo get_bloginfo('template_url').'/img/common/white-logo.png'; ?>">
                </a>
                <p class="sologan">Empower your business’s future</p>
                <p class="copyright">2016 Futurify. All rights reserved</p>
            </div>
            <div class="footer-02 col-xs-12 col-md-4 hidden-xs">
                <p>Stay in touch! We’re social and we love to be followed!</p>
                <div class="footer-social">
                    <a target="_blank" href="<?php echo $options['eto_facebook'];?>"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="<?php echo $options['eto_twitter'];?>"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="<?php echo $options['eto_linkedin'];?>"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-03 col-xs-12 col-md-3">
                <p>Subscribe to our newsletter! </p>
                <div class="newsletter">
                    <?php dynamic_sidebar("newsletter-sidebar"); ?>
                    <!--<input type="text" class="form-control" placeholder="Email Address">
                    <button class="btn btn-play"><i class="fa fa-caret-right"></i></button>-->
                </div>
            </div>
            <div class="footer-social visible-xs col-xs-12">
                <a target="_blank" href="<?php echo $options['eto_facebook'];?>"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="<?php echo $options['eto_twitter'];?>"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="<?php echo $options['eto_linkedin'];?>"><i class="fa fa-linkedin"></i></a>
            </div>
    </div>
</footer>