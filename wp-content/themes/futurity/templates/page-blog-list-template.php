<?php
/**
 * Template Name: Page Blog List template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

?>
<div class="bl-blog-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <!--<div class="bl-blog-list-title">
                    <h1 class="black-title">SHARING IS CARING</h1>
                    <p>A place we share to each other, care of things around us.   
                    It's our pleasure to share culture, thoughts, interests in technology with you - our clients as well as the new visitors</p>
                </div>-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bl-blog-list-content ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 bl-form-search">
                            <div class="row">
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
                                <?php
                                $tags = get_categories();
                                if($tags) {
                                    $html = '<ul class="nav navbar-nav col-xs-12 col-sm-8 col-md-8">';
                                    foreach ($tags as $tag) {
                                        $tag_link = get_tag_link($tag->term_id);
                                        $html .= "<li><a href='{$tag_link}'>{$tag->name}</a></li>";
                                    }
                                    $html .= '</ul>';
                                }
                                echo $html;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row list-blog">
                        <?php echo do_shortcode("[ajax_load_more post_type='post' posts_per_page='6' max_pages='3' container_type='div' scroll='false' css_classes='col-xs-12 col-sm-12 col-md-12' button_loading_label='']") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-list-share">
        <div class="row gutter">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h1>MAY YOU WANT TO SHARE WITH US? COME IN, HAVE A CUP OF COFFEE AND
                                <a href="<?php echo get_field("link") ?>">LET'S TALK!</a></h1>
                        </div>
                        <div class=" col-xs-12 col-sm-8 col-md-8">
                            <div class="bl-img">
                                <img class="img-responsive" src="<?php echo get_field("image") ?>" alt="blog-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
