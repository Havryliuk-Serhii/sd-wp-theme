 
<div id="comment">
	<div class="container">
		<div class="row">
			<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'Этот пост защищен паролем. ВВедите пароль чтобы просмотеть комментарии.', 'sd-theme' ); ?></p>
						</div>
			<?php
					return;
				endif;
			?>
 
			<?php if ( have_comments() ) : ?>
						<h3 id="comments-title"><?php
						printf( _n( 'Один ответ к %2$s', '%1$s Ответа(ов) к %2$s', get_comments_number(), 'sd-theme' ),
						number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
						?></h3>
						
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
						<div class="navigation">
							<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старые коментарии', 'sd-theme' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( __( 'Новые коментарии <span class="meta-nav">&rarr;</span>', 'sd-theme' ) ); ?></div>
						</div> <!-- .navigation -->
			<?php endif; // check for comment navigation ?>
 
			<ol class="commentlist">
				<?php
					wp_list_comments();
				?>
			</ol>
 
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
						<div class="navigation">
							<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старые коментарии', 'sd-theme' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( __( 'Новые коментарии <span class="meta-nav">&rarr;</span>', 'sd-theme' ) ); ?></div>
						</div>
			<?php endif;  ?>
			 
				<?php
					$num_comments = get_comments_number();
				if ( ! comments_open() && $num_comments == 0 ) : ?>
					<p class="nocomments"><?php _e( 'Коментарии закрыты.' , 'striped' ); ?></p>
				<?php endif;  ?>
			 
			<?php endif; ?>
 
		</div>
	</div>
	<div class="container">
		<div class="row">
		<?php comment_form(); ?>
		</div>
	</div>
	
</div>
