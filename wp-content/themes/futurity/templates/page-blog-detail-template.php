<?php
/**
 * Template Name: Page Blog detail template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
$options = get_option("eto_settings");
$google_map = get_field('location');
?>
<div class="bl-blog-detail">
       <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bl-blog-detail-title">
                    <h4>TECH CORNER</h4>
                    <h1>MARCH 2016 COMPANY RETREAT ngoc dug</h1>
                    <h5><span class="user-detail">by Tri Ho</span><span class="time-detail">posted on March 18, 2016</span></h5>
                    <p>A place we share to each other, care of things around us.   
                    It's our pleasure to share culture, thoughts, interests in technology with you - our clients as well as the new visitors</p>
                </div>
                <div class="main-content">
                    <h3>HEADING TITLE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</p>
                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>" alt="blog-img">
                    <h3>HEADING TITLE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
