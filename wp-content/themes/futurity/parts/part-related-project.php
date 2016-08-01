<?php $projects = getList("project", "menu_order date"); ?>

<div class="related-project clearfix">
    <div class="col-md-12">
        <h1>RELATED PROJECTS</h1>
        <div id="owl-project">
           <?php while ($projects->have_posts()) : $projects->the_post(); ?>

          <div class="item"><a href="<?php the_permalink()?>"><img class="img-responsive" src="<?php the_post_thumbnail_url("full"); ?>" alt="Owl Image"></a></div>
         <!-- <div class="item"><img class="img-responsive" src="<?php /*echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;*/?>" alt="Owl Image"></div>
          <div class="item"><img class="img-responsive" src="<?php /*echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;*/?>" alt="Owl Image"></div>
          <div class="item"><img class="img-responsive" src="<?php /*echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;*/?>" alt="Owl Image"></div>
          <div class="item"><img class="img-responsive" src="<?php /*echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;*/?>" alt="Owl Image"></div>
          <div class="item"><img class="img-responsive" src="<?php /*echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;*/?>" alt="Owl Image"></div>
          <div class="item"><img class="img-responsive" src="<?php /*echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;*/?>" alt="Owl Image"></div>
          <div class="item"><img class="img-responsive" src="<?php /*echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;*/?>" alt="Owl Image"></div>
          <div class="item"><img class="img-responsive" src="<?php /*echo get_bloginfo('template_url').'/img/content/our_project/project-6.png' ;*/?>" alt="Owl Image"></div>-->
           <?php endwhile; ?>
        </div>
        <div class="customNavigation navContainerClass">
            <a><span class="glyphicon glyphicon-triangle-left prev"></span></a>
            <a><span class="glyphicon glyphicon-triangle-right next"></span></a>
        </div>
    </div>
</div>