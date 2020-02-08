<?php get_header (); ?>	
	<div class="text-center">
		<h2>Такой страницы нет <a class="backlink" href="<?php echo home_url(); ?>">Перейти на главную страницу</a></h2>
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
<?php get_footer (); ?>
