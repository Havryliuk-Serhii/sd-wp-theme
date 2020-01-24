<?php get_header(); ?>
<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- Slider -->
						<div class="slideshow">
							<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>   
								<div class="carousel-inner">
									<div class="active item">
										<img src="images/jardinier.jpg" alt="">
										<div class="carousel-caption">                               
											<h2 class="carousel-post-title"><a href="single-post.html">Заголовок 1 слайда</a></h2>
											<p>Текст (описание) 1 слайда...</p>
										</div>
									</div>
									<div class="item">
										<img src="images/Rock-Garden.jpg" alt="">
										<div class="carousel-caption">							
											<h2 class="carousel-post-title"><a href="single-post.html">Second slide label</a></h2>
											<p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
										</div>
									</div>
									<div class="item">
										<img src="images/keokenhof-gardens.jpg" alt="">
										<div class="carousel-caption">                               
											<h2 class="carousel-post-title"><a href="single-post.html">Third slide label</a></h2>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
										</div>
									</div>
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
						<?php endwhile; else : ?>
							<p>Записей нет.</p>
						<?php endif; ?>
						<!-- Pagination -->
						<?php sd_pagination(); ?>						
					</div>
				</div>
			</div>
		</div>
		
	<?php get_footer();?>		