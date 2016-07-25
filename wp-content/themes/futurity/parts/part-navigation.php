<div id="logo-header" class="col-md-2 hidden-sm hidden-xs">
    <a class="logo" href="<?php echo esc_url( get_home_url() ) ?>">
        <span><img class="logo" src="<?php bloginfo('template_url') ?>/img/common/darklogo.png" alt="Logo" /></span>
    </a>
</div>
<div id="nav-header" class="nav-header hidden-sm hidden-xs col-md-10 row">
    <div class="main-menu">
        <?php
        // wp_nav_menu();
        ?>
        <div class="menu">
            <ul>
                <li class="page_item"><a href="/about">About</a></li>
                <li class="page_item"><a href="/projects">Projects</a></li>
                <li class="page_item"><a href="/service-process">Service&process</a></li>
                <li class="page_item"><a href="/we-share">We share</a></li>
                <li class="page_item"><a href="/contact-us">Contact us</a></li>
            </ul>
        </div>
    </div>
    <!-- <div id="social" class="">
        <span><a target="_blank" href="<?php echo get_option("eto_settings")['eto_facebook']; ?>"><i class="fa fa-facebook"></i></a></span>
    </div> -->
</div>

<div id="mobile-nav-header" class="nav-header visible-xs-block visible-sm-block items-group align-row align-start vertical-top">
    <div class="items-group align-column">
        <div id="social">
            <span><a target="_blank" href="<?php echo get_option("eto_settings")['eto_facebook']; ?>"><i class="fa fa-facebook"></i></a></span>
        </div>
            <?php
            wp_nav_menu();
            ?>
    </div>
</div>

