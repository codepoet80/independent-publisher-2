<?php
/**
 * Template part for displaying posts.
 *
 * @package Independent_Publisher_2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_search() || is_home() ) { ?>
		<?php independent_publisher_2_entry_header(); ?>
		<div class="entry-content">
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
		<img style="width: 680px; height: 300px; object-fit: cover;" src="<?php echo $url ?>" />
		<?php
			the_excerpt();
		?>
		</div><!-- .entry-content -->
	<?php } else { ?>
	<?php independent_publisher_2_entry_header(); ?>
	<?php independent_publisher_2_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'independent-publisher-2' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
	</div><!-- .entry-content -->
	<?php } ?>
	<footer class="entry-footer">
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'independent-publisher-2' ),
				'after'  => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>

		<?php independent_publisher_2_entry_meta(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
