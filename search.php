<?php get_header(); ?>
	
    <div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
					<div class="wp-block inverse no-margin">
						<div class="figure">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<div class="post-block-content">
								<div class="card-meta">
									 <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php else: ?>
						<p>По Вашему запросу ничего не найдено</p>				
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer (); ?>