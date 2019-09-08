<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper footer" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<div class="row">
							<div class="col-12 col-md-6 text-left">
							<span>© <?php echo get_bloginfo( 'name' ); ?> 2019. All Rights Reserved| Website built by <a href="mailto:lungeloneneh@gmail.com" >Ayanda Nene</a></span><br>
							</div>
							<div class="col-12 col-md-6 text-right">
								<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a href=""><i class="fab fa-linkedin-in"></i></a>
								<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>	
							</div>
						</div>
						
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script>
    $('.card-header > a').click(function() {
    $(this).find('i').toggleClass('fa-plus fa-minus')
           .closest('card').siblings('card')
           .find('i')
           .removeClass('fa-minus').addClass('fa-plus');
});
</script>
</body>

</html>

