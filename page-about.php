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
 * @package Beam_Theme
 */

get_header();
?>

	<main id="primary" class="site-main page-about-main">


		<div class="entry-content">
			<?php 
			if ( function_exists ( 'get_field' ) ) {
		
				if ( get_field( 'about_heading1' ) ) {
					echo '<h1>'. get_field( 'about_heading1' ) .'</h1>';
				}
				
				if ( get_field( 'about_image' ) ) {
					echo wp_get_attachment_image( get_field( 'about_image' ), 'medium', '', array( 'class' => 'aligncenter' ));
				}

				if ( get_field( 'about_text1' ) ) {
					the_field( 'about_text1' );
				}

				if ( get_field( 'about_heading2' ) ) {
					echo '<h2>'. get_field( 'about_heading2' ) .'</h2>';
				}

				if ( get_field( 'about_text2' ) ) {
					the_field( 'about_text2' );
				}
		
			} 
			?>
		</div>
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		
	</main><!-- #main -->

<?php

get_footer();
