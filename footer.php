<section id="footer">
	<div class="footer_top">
		<div class="container">
			<?php if (!dynamic_sidebar('footer_wid')): ?>
				<div class="widget">
					<h3>Виджет</h3>
				</div>
				<div class="widget">
					<h3>Виджет</h3>
				</div>
				<div class="widget">
					<h3>Виджет</h3>
				</div>
			<?php endif; ?>
		</div>
	</div>
		<div class="footer_b">
			<div class="container">
				<p class="text-block-left"> &copy; 2015 <a href="#" title="Садовый декор">Садовый декор. Все о ландшафтном дизайне</a>
				</p>
				<p class="text-block-right">
					<span>Сайт создан  <a href="#">  </a></span>
				</p>
			</div>
		</div>
	</section>
<?php wp_footer(); ?>
</body>
</html>