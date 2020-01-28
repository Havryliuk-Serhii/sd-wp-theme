<?php

if ( ! function_exists( 'sadoviy_decor_setup' ) ) :
	function sd_setup() {
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'primary' => 'Primary',
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}		
endif;
add_action( 'after_setup_theme', 'sd_setup' );
/**
 * Подключение скриптов и стилей
 */
function load_sd_style_scripts() {
	//Подключение стилей
	wp_enqueue_style( 'sd-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bts-sd_style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'fontawesome-sd_style', get_template_directory_uri() . '/css/fontawesome.min.css' );
	wp_enqueue_style( 'main-sd_style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'media-sd_style', get_template_directory_uri() . '/css/media.css' );
	//Подключение скриптов
	wp_enqueue_script( 'jquery-my',  get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(),'3.4.1', true);
	wp_enqueue_script( 'wpbootstrap-min-script', get_template_directory_uri() . '/js/bootstrap.min.js',array(), '3.3.5', true );	
}
add_action( 'wp_enqueue_scripts', 'load_sd_style_scripts' );

/**
 * Пагинация
 */

function sd_pagination( $args = array() ) {
    
    $defaults = array(
        'range'           => 4,
        'custom_query'    => false,
        'previous_string' => __( '«', 'text-domain' ),
        'next_string'     => __( '»', 'text-domain' ),
        'before_output'   => '<div class="text-center"><ul class="pagination">',
        'after_output'    => '</ul></div>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'sd_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    
    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';
    
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}
/**
*  Изменение порядка полей формы коментария
*/
add_filter('comment_form_fields', 'sd_reorder_comment_fields' );
function sd_reorder_comment_fields( $fields ){
	

	$new_fields = array(); 

	$myorder = array('author','email','comment'); 
	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}
/**
*  Вывод HTML разметки коментария
*/
function sd_list_comment( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>
	<li class="media">
		
		<div class="media-left">
			<?php 
				echo get_avatar( $comment, 95, '', '', array('class'=>'media-object img-rounded') );
		 	?>	
		</div>
		<div class="media-body">
			<?php
				printf(
					__( '<h4 class="media-heading">%s</h4>' ),
					get_comment_author()
				);			
			?>
			<?php 
				printf(
					__('<h4 class="media-heading"><span>%1$s</span></h4>'),
					get_comment_date()
				);
			?>	
			<?php if ( $comment->comment_approved == '0' ) { ?>
			<em class="comment-awaiting-moderation">
				<?php _e( 'Ваш комментарий ожидает модерации.' ); ?>
			</em><br/>
			<?php } ?>
			<?php comment_text(); ?>
		
			<div class="reply">
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'add_below' => $add_below,
							'depth'     => $depth,
							'max_depth' => $args['max_depth']
						)
					)
				); ?>
			</div>
		</div>
	<?php if ( 'div' != $args['style'] ) { ?>
	</li>	
	<?php }
}


if ( ! function_exists( 'sd_all_option' ) ) {
	function sd_all_option()
	{
		return get_option('ft_op');
	}
}
if ( ! function_exists( 'sd_of_get_option' ) ) {
	function sd_of_get_option( $name, $default = false )
	{
			$config = sd_all_option();

			if ( ! isset( $config['id'] ) )
				return $default;

			$options = get_option( $config['id'] );

			if ( isset( $options[$name] ) )
				return $options[$name];

			return $default;
	}
}