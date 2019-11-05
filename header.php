<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?php bloginfo('name'); ?>" />
	<title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" title="favicon">
	<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
						<a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"></a>
						
				</div>

				<div id="navbarCollapse" class="collapse navbar-collapse">
					<div class="row">
						<div class="col-md-9">
							<div class="col-md-8">
								<ul class="nav nav-pills">
									<?php if ( has_nav_menu( 'primary' ) ) {wp_nav_menu( array( 
											'container' => '', 
											'items_wrap' => '%3$s',
											'theme_location' => 'primary'
											) ); }
										else {wp_list_pages( array(
											'container' => '',
											'title_li' => ''
											));
									} ?>
								</ul>	
							</div>
							<div class="col-md-3-search">		
								<form role="search" class="navbar-form navbar-right" method="get" action="#">
									<div class="form-group">
										<input class="search-txt" type="text" name="s" value="Найти">
										<input class="search-img" type="image" src="<?php bloginfo('template_url'); ?>/images/search-icon.png" alt="search-icon">
									</div>
								</form>
							</div>	
						</div>	
					</div>
				</div>
			</div>
		</nav>
	</div>