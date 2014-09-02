<?php
/**
 * A template part for displaying a ping.
 *
 * @package     Compass
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2014, Flagship, LLC
 * @license     GPL-2.0+
 * @link        http://flagshipwp.com/
 * @since       1.0.0
 */
?>

<li <?php hybrid_attr( 'comment' ); ?>>

	<article>
		<header class="comment-meta">
			<cite <?php hybrid_attr( 'comment-author' ); ?>><?php comment_author_link(); ?></cite><br />
			<time <?php hybrid_attr( 'comment-published' ); ?>><?php printf( __( '%s ago', 'compass' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
			<a <?php hybrid_attr( 'comment-permalink' ); ?>><?php _e( 'Permalink', 'compass' ); ?></a>
			<?php edit_comment_link(); ?>
		</header><!-- .comment-meta -->
	</article>

<?php
//* No closing </li> is needed.  WordPress will know where to add it.
