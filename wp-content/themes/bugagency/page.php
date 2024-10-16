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
 * @package BugAgency
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php while ( have_posts() ) :
				the_post();
							while (have_rows('content_elements')) : the_row();
									require __DIR__ . '\layouts\\' . get_row_layout() . '.php';
									wp_reset_postdata();
							endwhile;
					endwhile;
	?>
	</main><!-- #main -->

<?php
get_footer();
