<?php get_header(); ?>
<div class="bl-blog-list">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bl-blog-list-title">
                    <h1>OUR CULTURE</h1>
                    <p>A place we share to each other, care of things around us.
                        It's our pleasure to share culture, thoughts, interests in technology with you - our clients as well as the new visitors</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bl-blog-list-content ">
                    <div class="row list-blog">
                        <?php $tag = get_query_var("category") ?>
                        <?php echo do_shortcode("[ajax_load_more post_type='post' posts_per_page='6' max_pages='3' container_type='div' css_classes='col-xs-12 col-sm-12 col-md-12' button_loading_label='' category='{$tag}']") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
