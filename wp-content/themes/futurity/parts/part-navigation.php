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
                <img class="menu-icon" src="<?php bloginfo('template_url') ?>/img/common/menu-ico.png">
                <img class="close-icon" src="<?php bloginfo('template_url') ?>/img/common/close.png">
            </button>
            <?php

            wp_nav_menu(array(
                'menu_class' => 'dropdown-menu',
                'container' => ''));
            ?>
        </div>
    </div>
</nav>

