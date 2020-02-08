<?php get_header (); ?>
	<?php 
		while (have_posts()) : the_post(); ?>
		<article class="article" id="post-<?php the_ID(); ?>">
		    <div class="entry-content">
    	    	<h2 class="post-title"><?php the_title(); ?></h2>
    	    	<?php the_post_thumbnail(); ?>
               	<?php the_content(); ?>
    		</div>
    	</article>
        <div class="post-navigation">
            <div class="row">
              <?php the_post_navigation(); ?>  
            </div>
        </div>        
        <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
		?>
		<?php endif; ?>  
<?php endwhile; ?>			
<?php get_footer (); ?>