<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?php bloginfo('name'); ?>" />
	<title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" title="favicon">
	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="wrapper">
		<!-- Header -->
		<div class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"></a>
				</div>
			<!-- Menu -->
				<div  class="navbar-collapse collapse navbar-right">
					<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false, 
								'menu_class' => 'nav nav-pills',			
							) );
						?>
				</div>				
			</div>
		</div>
		

				