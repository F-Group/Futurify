<?php
/**
 * Template Name: Page Blog List template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
$options = get_option("eto_settings");
$google_map = get_field('location');
?>
<div class="bl-blog-list">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bl-blog-list-title">
                    <h1>SHARING IS CARING</h1>
                    <p>A place we share to each other, care of things around us.   
                    It's our pleasure to share culture, thoughts, interests in technology with you - our clients as well as the new visitors</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bl-blog-list-content">
                    <div class="row">
                        <div class="col-md-8">
                            <form id="formSearch" class="clearfix col-md-4" method="post" action="#">
                                <div class="input-group">
                                    <span class="glyphicon glyphicon-search input-group-addon"></span>
                                    <input class="form-control" type="text" name="blSearch">
                                    <span class="glyphicon glyphicon-triangle-right form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </form>
                            <ul class="nav navbar-nav col-md-8">
                                <li><a href="#">TECH CORNER</a></li>
                                <li><a href="#">OUR CULTURE</a></li>
                                <li><a href="#">TECH MASHUP</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
