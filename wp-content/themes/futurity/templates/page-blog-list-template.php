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
                <div class="bl-blog-list-content ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 bl-form-search">
                            <form id="formSearch" class="clearfix col-xs-12 col-sm-4 col-md-4 " method="post" action="#">
                                <div class="bl-search">
                                    <span class="glyphicon glyphicon-search"></span>
                                    <input class="form-control inputSearch" type="text" name="inputSearch" placeholder="Search">
                                    <button class="btnSearch" type="submit" name="btnSearch"><span class="glyphicon glyphicon-triangle-right"></span></button>
                                </div>
                                <div class="bl-result">
                                    <ul>
                                        <li>
                                            <a href="#">Tech stories</a>
                                        </li>
                                        <li>
                                            <a href="#">Tech corner</a>
                                        </li>
                                        <li>
                                            <a href="#">Tech Mashup</a>
                                        </li>
                                        <li>
                                            <a href="#">Tech stories</a>
                                        </li>
                                        <li>
                                            <a href="#">Tech corner</a>
                                        </li>
                                        <li>
                                            <a href="#">Tech Mashup</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                            <ul class="nav navbar-nav col-xs-12 col-sm-8 col-md-8">
                                <li><a href="#">TECH CORNER</a></li>
                                <li><a href="#">OUR CULTURE</a></li>
                                <li><a href="#">TECH MASHUP</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row list-blog">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>" alt="blog-img">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>" alt="blog-img">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>" alt="blog-img">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>" alt="blog-img">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>" alt="blog-img">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="bl-blog-list-item">
                                    <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>" alt="blog-img">
                                    <div class="bl-blog-list-item-des">
                                        <h3>TECH MASHUP</h3>
                                        <h2>TOP 10 BREAKING NEWS OF THE GIANTS </h2>
                                        <p>by Joey</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 bl-btn-load">
                            <button id="btnLoadMore" type="button" name="btnLoadMore"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-list-share">
        <div class="row gutter">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="container">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1>MAY YOU WANT TO SHARE WITH US? COME IN, HAVE A CUP OF COFFEE AND
                        <a href="#">LET'S TALK!</a></h1>
                    </div>
                    <div class=" col-xs-12 col-sm-8 col-md-8">
                        <div class="bl-img">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url').'/img/content/blog_list/blg-list-1.png' ;?>" alt="blog-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>