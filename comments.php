<div id="comment">
	<div class="container">
		<div class="row">
			<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
						</div><!-- #comments -->
			<?php
					/*
					 * Stop the rest of comments.php from being processed,
					 * but don't kill the script entirely -- we still have
					 * to fully load the template.
					 */
					return;
				endif;
			?>
 
			<?php if ( have_comments() ) : ?>
						<h3 id="comments-title"><?php
						printf( _n( 'Один ответ к %2$s', '%1$s Ответа(ов) к %2$s', get_comments_number(), 'twentyten' ),
						number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
						?></h3>
						
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
						<div class="navigation">
							<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
						</div> <!-- .navigation -->
			<?php endif; // check for comment navigation ?>
 
			<ol class="commentlist">
				<?php
					/*
					 * Loop through and list the comments.
					 */
					wp_list_comments();
				?>
			</ol>
 
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
						<div class="navigation">
							<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
						</div><!-- .navigation -->
			<?php endif; // check for comment navigation ?>
			 
				<?php
				/*
				 * If there are no comments and comments are closed, let's leave a little note.
				 */
				$num_comments = get_comments_number();
				if ( ! comments_open() && $num_comments == 0 ) : ?>
					<p class="nocomments"><?php _e( 'Comments are closed.' , 'striped' ); ?></p>
				<?php endif;  ?>
			 
			<?php endif; // end have_comments() ?>
 
		</div>
	</div>
	<div class="container">
		<div class="row">
		<?php comment_form(); ?>
		</div>
	</div>
	
</div>
