<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="error-404" id="error-404-wrapper">

	<main class="site-main" id="main">

			<div class="hero hero-mini wrapper d-flex align-items-center">
				<div class="container hero--content">
					<div class="row">
						<div class="col">
							<h1 class="page-title">Error 404</h1>
						</div>
					</div>
				</div>
			</div>

			<?php include 'templates/modules/error-404-content.php'; ?>

	</main>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
