<?php get_header(); ?>

						<!-- Slider -->
						<div class="slideshow">
							<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>   
								<div class="carousel-inner">
									<?php $slidecount = sd_of_get_option('sd_slide_count','2'); ?>
									<?php $slidecat = sd_of_get_option('sd_slide_cat','1'); ?>

				<?php
					$args = array( 'posts_per_page' => $slidecount , 'cat' => $slidecat  );
					$loop = new WP_Query( $args );
					$count = 0;
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<div class="item <?php echo esc_attr( $count == 0 ? 'active' : '' ); ?>">
										<?php 
											$thumb = get_post_thumbnail_id();
											$img_url = wp_get_attachment_url( $thumb,'full' );
										?>
										<img src="<?php echo $img_url ?>" alt="<?php the_title(); ?>">
										<div class="carousel-caption">                               
											<h2 class="carousel-post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
										</div>
									</div>
									<?php 
										$count++;
										endwhile;
			     						 ?>								
								</div>
									<!-- Carousel navigation -->
								<a class="carousel-control left" href="#myCarousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="carousel-control right" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>							
						</div>
						<!-- Post -->
						<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
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
						<?php endwhile; 
							else : ?>
							<p>Записей нет.</p>
						<?php endif; ?>
						<!-- Pagination -->
						<?php sd_pagination(); ?>
					</div>
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
	<?php get_footer();?>		