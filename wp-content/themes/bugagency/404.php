<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bugagency
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="error">
				<div class="error_layout">
					<div class="container">
						<div class="row">
							<div class="error_info">
							<div class="col-4">
								<div class="error_404">
									<h1>404</h1>		
									</div>
							</div>
							
						<div class="col-8">
							<div class="error_message">

							<h2 class="page-title"><?php echo 'Ups! Kjo faqe nuk u gjet.'; ?></h2>
							
							<a href="http://auto_trimi.test/" class="btn-details">
							Ballina <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.9109 0.219727H5.35538C5.14042 0.219727 4.96648 0.39367 4.96648 0.608628C4.96648 0.823586 5.14042 0.997529 5.35538 0.997529H12.9721L0.413746 13.5559C0.261824 13.7078 0.261824 13.9539 0.413746 14.1058C0.489689 14.1817 0.58922 14.2197 0.688715 14.2197C0.78821 14.2197 0.887705 14.1817 0.963684 14.1058L13.522 1.54743V9.1642C13.522 9.37916 13.6959 9.5531 13.9109 9.5531C14.1259 9.5531 14.2998 9.37916 14.2998 9.1642V0.608628C14.2998 0.39367 14.1258 0.219727 13.9109 0.219727Z" fill="white"></path>
							</svg>
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		</section>
	</main>

<?php
get_footer();