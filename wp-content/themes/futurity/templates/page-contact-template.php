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
