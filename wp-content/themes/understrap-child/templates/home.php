<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="home" id="page-wrapper">

			<main class="site-main" id="main">
				<!-- Inject the hero module -->
					<?php include 'modules/hero.php'; ?>

					<!-- Inject the jumplinks module -->
					<?php include 'modules/about.php'; ?>

					<!-- Inject the introduction module -->
					<?php include 'modules/projects.php'; ?>

					<!-- Inject the card bin module -->
					<?php include 'modules/events.php'; ?>

					<!-- Inject the blog-mini module -->
					<?php include 'modules/team.php'; ?>

					<!-- Inject the blog-mini module -->
					<?php include 'modules/contact-us.php'; ?>
				
			</main><!-- #main -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
