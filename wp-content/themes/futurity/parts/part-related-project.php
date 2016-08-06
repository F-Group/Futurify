<?php $projects = getList("project", "menu_order date"); ?>

<div class="related-project clearfix">
    <div class="col-md-12">
        <h1>RELATED PROJECTS</h1>
        <div id="owl-project" class="owl-carousel">
            <?php if($projects->have_posts()) { ?>
                <?php while ($projects->have_posts()) : $projects->the_post(); ?>
                    <?php if(has_post_thumbnail()) { ?>
                    <div class="item"><a href="<?php the_permalink()?>"><img class="img-responsive" src="<?php the_post_thumbnail_url("full"); ?>" alt="Owl Image"></a></div>
                    <?php } ?>
                <?php endwhile; ?>
            <?php } ?>
        </div>
        <div class="customNavigation navContainerClass">
            <a><span class="glyphicon glyphicon-triangle-left prev"></span></a>
            <a><span class="glyphicon glyphicon-triangle-right next"></span></a>
        </div>
    </div>
</div>