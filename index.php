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
						<div class="post-block inverse">
							<div class="figure">
								<a href="single-post.html"><img src="images/grass-1.jpg" alt=""></a>
								<div class="post-block-content">
									<div class="card-meta">
										<!-- Date and comments -->
										<div class="post-meta-top">
										<i class="fa fa-user-o" aria-hidden="true"></i>
										админ
										<span class="sep">/</span>
										  <i class="fa fa-calendar-o" aria-hidden="true"></i>24 августа 2015		
											<span class="sep">/</span><i class="fa fa-comment-o" aria-hidden="true"></i> 1 комментарий 	
										</div>
									    <h2 class="post-title"><a href="single-post.html">Hello world!</a></h2>
								    </div>
							    </div>	
						    </div>
						</div>
						<div class="post-block inverse">
							<div class="figure">
								<a href="single-post.html"><img src="images/jardinier.jpg" alt=""></a>
								<div class="post-block-content">
									<div class="card-meta">
										<!-- Date and comments -->
										<div class="post-meta-top">
										<i class="fa fa-user-o" aria-hidden="true"></i>
										админ
										<span class="sep">/</span>
										  <i class="fa fa-calendar-o" aria-hidden="true"></i>24 августа 2015		
											<span class="sep">/</span><i class="fa fa-comment-o" aria-hidden="true"></i> 1 комментарий 	
										</div>
									</div>
									<h2 class="post-title"><a href="single-post.html">Hello world!</a></h2>
								</div>
							</div>	
						</div>
						<!-- Pagination -->
						<div class="text-center">
							<ul class="pagination">
								<li class="disabled"><span>«</span></li>
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">»</a></li>
							</ul>
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
							<h3 class="widget-title">Поиск</h3>	
							<!-- Search form -->
				<form role="search" class="navbar-form navbar-left" method="get" action="#">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Найти">
					</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>                            
				</form>  
						</div>
					</div>			
					
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="widget-right">
							<h3 class="widget-title">Мы в соцсетях</h3>
							<ul class="social-icon">
								<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer();?>		