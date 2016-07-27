<?php
/**
 * Template Name: Page Contact template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
$options = get_option("eto_settings");
$google_map = get_field('location');
?>
<div class="block contact-page">
    <section>
        <div class="container">
            <div class="row paragraph">
                <h2>HELLO</h2>
                <p>We always have good taste Vietnamese coffee.<br>
                    Come in our nest, have a cup of coffee and a talk with us.<br>
                    Work together. Do amazing projects.<br>
                    Bring success to your business, we know how.</p>
            </div>
        </div>
        <div class="clearfix contact-center">
            <div class="contact-form-container">
                <div class="form-content">
                    <?php echo get_field("contact_form")?>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-content">
                    <?php echo get_field("contact_info"); ?>
                    <h1>DROP IN OUR OFFICE</h1>
                    <p>Our office is located in a beautiful building inside  the busiest and fast-growing city</p>
                    <div class="detail-info">
                        <div class="contact-field contact-address">
                            <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-text">
                                <span>Ho Chi Minh City</span><br>
                                <span>21A Go Dau Str, Tan Quy Ward, Tan Phu District, HCMC, Vietnam</span>
                            </div>
                        </div>
                        <div class="contact-field contact-mail">
                            <div class="contact-icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="contact-text"><span>info@futurify.vn</span></div>
                        </div>
                        <div class="contact-field contact-phone">
                            <div class="contact-icon"><i class="fa fa-phone"></i></div>
                            <div class="contact-text"><span>(+84) 83-559-0006</span></div>
                        </div>
                    </div>
                    <div class="contact-social">
                        <a target="_blank" href="<?php echo $options['eto_facebook'];?>"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="<?php echo $options['eto_twitter'];?>"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="<?php echo $options['eto_linkedin'];?>"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <h3>WE ARE HIRING!</h3>
                    <button class="btn btn-main">CONTACT US!</button>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <div class="clearfix">
                <div id="gMap"
                     data-lat="<?php echo $google_map['lat'] ? $google_map['lat'] : 0; ?>"
                     data-lng="<?php echo $google_map['lng'] ? $google_map['lng'] : 0; ?>">
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATExYoowEjVke3f-99PHj4M07I5D8hy4M"></script>
<?php get_footer(); ?>
