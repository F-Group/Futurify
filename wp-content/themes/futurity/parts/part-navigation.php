<div id="logo-header" class="col-md-2">
    <a class="logo" href="<?php echo esc_url( get_home_url() ) ?>">
        <span>
            <img class="logo" src="<?php bloginfo('template_url') ?>/img/common/darklogo.png" alt="Logo" />
            </span>
    </a>
</div>
<nav class="navigation"  id="nav-header" class="nav-header col-md-10">
    <div class="main-menu">
        <div class="menu-desktop hidden-xs">
            <?php
            wp_nav_menu();
            ?>
        </div>
        <div class="menu-mobile visible-xs">
            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php bloginfo('template_url') ?>/img/common/menu-ico.png">
            </button>
            <ul class="dropdown-menu">
                <li class="page_item"><a href="/about">About</a></li>
                <li class="page_item"><a class="active" href="/projects">Projects</a></li>
                <li class="page_item parent">
                    <a href="/service-process">Service & process</a>
                    <ul>
                        <li><a href="#">Staffing</a></li>
                        <li><a href="#">Mvp</a></li>
                    </ul>
                </li>
                <li class="page_item"><a href="/we-share">We share</a></li>
                <li class="page_item"><a href="/contact-us">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>

