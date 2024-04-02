<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beam_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		
		<hr class="contact-hr"></hr>

		<h2 class="contact-heading">Contact</h2>

		<section class="site-info">
			<p class="contact-text">Let's create something amazing together!</p>
			
			<div class="footer-menus">
				<nav id="footer-navigation" class="footer-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-right') ); ?>
				</nav>
			</div>
		</section><!-- .site-info -->

		<div class="footer-author">
				<?php
				echo "&copy";
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s by %2$s.', 'beam-theme' ), 'beam-theme', '<a href="https://jeanlin.ca">Jean Lin</a>' );
				?>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
