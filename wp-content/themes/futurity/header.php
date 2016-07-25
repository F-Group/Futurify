<!DOCTYPE html>
<!--[if IE 8]>
<html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]>
<html <?php language_attributes(); ?>> <![endif]-->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <link rel="profile" href="http://gmgp.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url') ?>/js/lib/respond.min.js"/>
    </script><![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url') ?>/js/lib/html5shiv.js"/>
    </script><![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="wrapper">
    <div class="page">
            <header class="header">
                <div class="container">
                    <div class="row">
                        <?php get_template_part("parts/part", "navigation"); ?>
                    </div>
                </div>
            </header>
            <div id="main" class="clearfix">

                <div id="carousel-example-vertical" class="carousel vertical slide">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php bloginfo('template_url') ?>/img/menu.jpg">
                            <div class="caption">
                                <h2>OUR MISSION</h2>
                                <p>We offer remote world-class engineers and build reliable, scalable and measurable solutions to help you grow and succeed</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('template_url') ?>/img/menu.jpg">
                            <div class="caption">
                                <h2>OUR MISSION</h2>
                                <p>We offer remote world-class engineers and build reliable, scalable and measurable solutions to help you grow and succeed</p>
                            </div>
                        </div>
                    
                  </div>

                  <!-- Controls -->
                  <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="container">