<?php get_header (); ?>
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <div id="content">
		<div class="container">
			<div class="post-meta-top"><span><?php the_author() ?></span>  - <span><?php the_time('j M, Y')?></span>	
				<span class="post-comments">/<a href="#"><?php comments_popup_link('нет коментариев', '1 коментаний', '% коментариев')?></a></span>  	
			</div>
			<h2 class="post-title"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</div>
	
<?php endwhile; ?>
<?php endif; ?>
	<div class="container">
		<div class="text-center">
			<ul class="pagination">
				<?php previous_post_link('<span>&laquo;</span>%link');?> <?php next_post_link('%link<span>&raquo;</span>'); ?>
			</ul>	
		</div>	
	</div>
<?php comments_template(); ?>
<?php get_footer (); ?>
