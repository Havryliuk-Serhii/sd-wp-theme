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
<?php get_footer();?>	