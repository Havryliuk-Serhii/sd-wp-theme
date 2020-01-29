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
				</div>
			</div>
		</div>
	</div>
	<div class="widget-area">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('footer_widget_left'); ?>
				<?php dynamic_sidebar('footer_widget_right'); ?>
			</div>
		</div>
	</div>	
<?php get_footer (); ?>