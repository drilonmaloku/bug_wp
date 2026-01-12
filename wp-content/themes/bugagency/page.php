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
 * @package bugagency_wealth
 */

get_header();
?>

	<main class="site-main">
		<?php while ( have_posts() ) :
			the_post();
             while ( have_rows('content_elements') ) : the_row();

            $layout_name = get_row_layout();
            $layout_file = get_template_directory() . '/layouts/' . $layout_name . '.php';

            if( file_exists( $layout_file ) ) {
                require $layout_file;
            } else {
                echo 'Layout file not found: ' . $layout_file;
            }

        endwhile;
        endwhile;
		?>
	</main>

<?php
get_footer();
