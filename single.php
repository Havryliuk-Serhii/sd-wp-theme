<?php get_header(); ?>
	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		<article class="article" id="post-<?php the_ID(); ?>">
		    <div class="general-image">
	           <?php the_post_thumbnail(); ?>
	        </div>
	        <div class="post-main">
    	    	<h2 class="post-title"><?php the_title(); ?></h2>
            	<div class="post-head">
                	<div class="row">
                    	<div class="col-md-4 col-sm-12 col-xs-12">
                    	    <span class="date-post"><?php the_time('j M, Y')?></span>
                    	</div>
                    	<div class="col-md-4 col-sm-12 col-xs-12">
                        	<p class="post-author">Автор : <a href="<?php the_permalink(); ?>" class="text-link"><?php the_author() ?></a></p>  
                    	</div>
                    	<div class="col-md-4 col-sm-12 col-xs-12">
	                        <ul class="social-icon-head">
	                    	    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
	                        	 <li><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
	                            <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
	                        </ul>
                    	</div>
                	</div>                
            	</div>
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
<?php endif; ?>

<?php get_footer();?>	