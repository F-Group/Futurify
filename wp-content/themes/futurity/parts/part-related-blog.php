<?php $projects = getList("post", "menu_order date"); ?>

<div class="related-blog clearfix">
    <div class="col-md-12">
        <h1>WHAT'S NEXT?</h1>
        <div id="owl-project" class="owl-carousel">
           <?php while ($projects->have_posts()) : $projects->the_post(); ?>

          <div class="item"><a href="<?php the_permalink(); ?>">
                  <div class="bl-blog-list-item">
                      <div class="img-container"><img class="img-responsive" src="<?php the_post_thumbnail_url() ?>" alt="blog-img"></div>
                      <div class="bl-blog-list-item-des">
                          <?php
                          $posttags = get_the_tags();
                          if ($posttags) {
                              echo '<h3>';
                              foreach($posttags as $tag) {
                                  echo '<span>'. $tag->name . '</span>';
                              }
                              echo '</h3>';
                          }
                          ?>
                          <h2><?php the_title(); ?></h2>
                          <p class="author-info">by  <?php echo get_the_author(); ?> </p>
                      </div>
                  </div>
              </a> </div>
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