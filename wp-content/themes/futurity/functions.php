<?php
    define( 'THEME_URL', get_stylesheet_directory() );
    define( 'CORE', THEME_URL . '/core' );

//    require_once( CORE . '/init.php' );

if ( ! function_exists( 'tsg_setup' ) ) :

    function tsg_setup() {
       // load_theme_textdomain( 'twentyfourteen', get_template_directory() . '/languages' );
        load_theme_textdomain( 'tsg', THEME_URL . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( 'post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            )
        );
        add_theme_support( 'custom-background', apply_filters( 'lse_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'tsg' )
        ) );
    }
    add_action ( 'init', 'tsg_setup' );

    add_editor_style( array( 'css/editor-style.css' ) );

endif;

function tsg_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Content SideBar', 'tsg' ),
        'id'            => 'main-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget instagram %2$s">',
        'after_widget'  => '</div>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Newsletter SideBar', 'tsg' ),
        'id'            => 'contact-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget contact-btn %2$s">',
        'after_widget'  => '</div>'
    ) );
}
add_action( 'widgets_init', 'tsg_widgets_init' );

function tsg_scripts() {
    // add wordpress jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');

    $path = get_template_directory_uri();

    // custom js
    $scripts = array(
        '/js/lib/bootstrap.min.js',
        '/js/lib/scrolloverflow.min.js',
        '/js/lib/jquery.fullPage.min.js',
        '/js/lib/jquery.malihu.PageScroll2id.min.js',
        '/js/lib/owl-carousel/owl.carousel.min.js',
        '/js/lib/isotope/isotope.pkgd.min.js',
        '/js/app.js'
    );
    foreach ($scripts as $key => $url){
        wp_enqueue_script( 'lse-script-'.$key, $path .  $url, array());
    }

    $styles = array(
        '/js/lib/owl-carousel/owl.theme.css',
        '/js/lib/owl-carousel/owl.carousel.min.css',
        '/css/jquery.fullPage.css',
        '/css/font-awesome.min.css',
        '/css/hover-min.css'
    );
    foreach ($styles as $key => $url){
        wp_enqueue_style( 'tsg-style-'.$key, $path .  $url, array());
    }

    wp_enqueue_style( 'tsg-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'tsg_scripts' );

function add_theme_option() {
    global $taka_options;
    $taka_options = get_option("eto_settings");
}
add_action( 'wp_head', 'add_theme_option' );

function get_background($id=null) {

    // check to see if the theme supports Featured Images, and one is set
    if ($id && current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $id)) {

        // specify desired image size in place of 'full'
        $page_bg_image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full' );
        $page_bg_image_url = $page_bg_image[0]; // this returns just the URL of the image

    } else {
        // the fallback – our current active theme's default bg image
        $page_bg_image_url = get_background_image();
    }

    return $page_bg_image_url ? $page_bg_image_url : get_bloginfo('template_url').'/img/common/header_img.jpg';
}

function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyATExYoowEjVke3f-99PHj4M07I5D8hy4M';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function getList($type,$order_by="date") {

    $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1,
        'orderby'=>$order_by,
        'order'=>'DESC');
    return new WP_Query($args);
}


function remove_parent_classes($class)
{
    // check for current page classes, return false if they exist.
    return ($class == 'current_page_item' || $class == 'current_page_parent' || $class == 'current_page_ancestor'  || $class == 'current-menu-item') ? FALSE : TRUE;
}

function add_class_to_wp_nav_menu($classes)
{
    switch (get_post_type())
    {
        case 'post':
            // we're viewing a custom post type, so remove the 'current_page_xxx and current-menu-item' from all menu items.
            $classes = array_filter($classes, "remove_parent_classes");

            // add the current page class to a specific menu item (replace ###).
            if (in_array('menu-item-20', $classes))
            {
                $classes[] = 'current-menu-item';
            }
            break;
        case 'project':
            // we're viewing a custom post type, so remove the 'current_page_xxx and current-menu-item' from all menu items.
            $classes = array_filter($classes, "remove_parent_classes");

            // add the current page class to a specific menu item (replace ###).
            if (in_array('menu-item-18', $classes))
            {
                $classes[] = 'current-menu-item';
            }
            break;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_to_wp_nav_menu');

function add_fisrt_nav_item($items) {
    $homeurl = get_home_url();
    return  $items = '<li class="menu-item home"><a href="'.$homeurl.'">FUTURIFY</a></li>' . $items;
}
add_filter('wp_nav_menu_items','add_fisrt_nav_item');

add_filter( 'tinymce_templates_enable_media_buttons', function(){ return true; } );
function get_portfolio() {
    if ( isset($_REQUEST) ) {
        $offset = $_REQUEST['offset'];
        $args = array(
            'post_status' => 'publish',
            'caller_get_posts'=> 1,
            'order'=>'DESC',
            'post_type' => 'project',
            'posts_per_page' => 3,
            'offset' => $offset) ;
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            if(has_post_thumbnail()) {
                            echo '<div class="col-xs-12 col-sm-6 col-md-4"><div class="bl-our-project-item"><a href="'; echo esc_url(the_permalink());
                echo  '"> <img class="img-responsive" src="';
                echo esc_url(the_post_thumbnail_url("full"));
                echo '" alt="project-img">
                                        <div class="outer">
                                            <div class="inner">
                                                <div class="align-middle">
                                                    <div class="title"><h3>';
                echo esc_url(the_title());
                echo '</h3></div> <div class="action">
                                                        <div class="btn"><span>VIEW PROJECT</span><i class="fa fa-arrow-right"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>';
                        } else {
                            echo '<div class=" col-xs-12 col-sm-12 col-md-8">';
                echo the_content() ;
                echo '</div>';
                         }
                endwhile;
    }
    die();
}
add_action( 'wp_ajax_get_portfolio', 'get_portfolio' );
add_action( 'wp_ajax_nopriv_get_portfolio', 'get_portfolio' );