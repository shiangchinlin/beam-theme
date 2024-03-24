<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package School_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="animation-background">
		<h1 class="fw-light text-white m-0">CSS Gradient Background Animation</h1>
	</div>

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		    ?>

		<?php
		endwhile; // End of the loop.
		?>


	</main><!-- #main -->

<?php
get_footer();
