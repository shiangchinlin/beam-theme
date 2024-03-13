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

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
			?>

			<h2><?php esc_html_e( 'featured work', 'beam' ); ?></h2>

			<section class="home-blog">
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 4
				);
				$blog_query = new WP_Query ( $args );
				if ( $blog_query -> have_posts() ) {
					while ( $blog_query -> have_posts() ) {
						$blog_query -> the_post();
						?>
						<article class="home-recent-news">
							<a href="<?php echo the_permalink(); ?>">
								<?php the_post_thumbnail( 'landscape-home-blog' ); ?>
								<h3><?php echo the_title(); ?></h3>
							</a>
						</article>
						<?php

					}
					wp_reset_postdata();
				}
				?>


			</section>
		
						
			<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();