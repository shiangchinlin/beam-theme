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

	<section class="coverphoto">
		<!-- <div class="coverphoto"></div> -->
		<h1 class="home-firstname">JEAN</h1>
		<h1 class="home-lastname">LIN</h1>
			<h2 class="home-title-1">Front-End</h2>
			<h2 class="home-title-2">Web Developer</h2>
			<h2 class="home-title-3">Web Designer</h2>
	</section>

	<section>
		<div class="wrap">
		<div class="line">
		<div class="left">
			<div class="content">
			<span class="spanSlow">Aladdin</span>
			</div>
		</div><!--
		--><div class="right">
			<div class="content">
			<span class="spanSlow">Aladdin</span>
			</div>
		</div>
		</div>
		<div class="line">
		<div class="left">
			<div class="content">
			<span class="spanSlow">What do</span>
			</div>
		</div><!--
		--><div class="right">
			<div class="content">
			<span class="spanSlow">what do</span>
			</div>
		</div>
		</div>
		<div class="line">
			<div class="left">
				<div class="content">
				<span class="spanFast">you</span>
				</div>
			</div><!--
			--><div class="right">
				<div class="content">
				<span class="spanFast">you</span>
				</div>
			</div>
			</div>
			<div class="line">
				<div class="left">
				<div class="content">
					<span class="spanSlow">want</span>
				</div>
				</div><!--
				--><div class="right">
				<div class="content">
					<span class="spanSlow">want</span>
				</div>
				</div>
			</div>
		</div>
	</section>

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
