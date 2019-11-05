<?php get_header (); ?>
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <div id="content">
		<div class="container">
			<h2 class="post-title"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer (); ?>