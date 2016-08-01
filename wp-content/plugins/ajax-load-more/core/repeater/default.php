<div class="col-xs-12 col-sm-4 col-md-4">
	<a href="<?php the_permalink(); ?>">
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
        		<p>by  <?php echo get_the_author(); ?> </p>
    		</div>
    	</div>
	</a>
</div>