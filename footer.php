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
	</main>
</div>
<footer class="footer">
	<div class="container">
		<p>&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php esc_attr( bloginfo('name') ); ?>"><?php bloginfo('name'); ?></a></p>			
	</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>  