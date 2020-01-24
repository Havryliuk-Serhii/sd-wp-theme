<?php get_header (); ?>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php while (have_posts()) : the_post(); ?>
						<div class="post-block inverse">
							<div class="figure">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
								<div class="post-block-content">
									<div class="card-meta">
										<div class="post-meta-top">
											<i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>
											<span class="sep">/</span>
										  	<i class="fa fa-calendar-o" aria-hidden="true"></i><?php the_time('j M, Y')?>		
											<span class="sep">/</span><i class="fa fa-comment-o" aria-hidden="true"></i> <?php comments_popup_link('нет коментариев', '1 коментаний', '% коментариев')?>	
										</div>
									    <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								    </div>
							    </div>	
						    </div>
						</div>	    
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer (); ?>