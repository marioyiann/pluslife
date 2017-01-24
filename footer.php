<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PlusLife
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( esc_html__( 'Proudly powered by %s', 'pluslife' ), '' ); ?><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pluslife' ) ); ?>"><?php printf( esc_html__( '%s', 'pluslife' ), 'Wordpress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme %s by ', 'pluslife' ), 'Pluslife' ); ?><a href="<?php echo esc_url( __( 'http://marioyiann.com/', 'pluslife' ) ); ?>" target="_blank" rel="nofollow"><?php printf( esc_html__( '%s', 'pluslife' ), 'marioyiann' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
