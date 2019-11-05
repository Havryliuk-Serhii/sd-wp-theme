<?php get_header(); ?>
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="wp-block inverse no-margin">
						<div class="figure">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<div class="wp-block-content">
								<div class="card-meta">					
								</div>
								<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php endwhile; ?>
<?php else: ?>
	<div id="content">
		<div class="container">
			<div class="row">
				<p>По Вашему запросу ничего не найдено</p>
			</div>
		</div>
	</div>		
				
<?php endif; ?>
	<div class="container">
		<div class="text-center">
			<ul class="pagination">
				<?php posts_nav_link(); ?>
			</ul>	
		</div>	
	</div>
<?php get_footer (); ?>