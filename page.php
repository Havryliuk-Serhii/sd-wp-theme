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
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="widget-left">
						<h3 class="widget-title"><?php echo __('Поиск', 'sd')?></h3>	
						<!-- Search form -->
						<form role="search" class="navbar-form navbar-left" method="get" action="#">
							<div class="form-group">
								<input name="s" type="text" class="form-control" placeholder="<?php echo __('Найти', 'sd')?>">
							</div>
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>                            
						</form>  
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 col-xs-6">
					<?php if(!dynamic_sidebar('footer_widget_right')): ?>
					<?php dynamic_sidebar( 'footer_widget_right' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>	
<?php get_footer (); ?>