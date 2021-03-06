<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
<?php 
					if ( is_page('contact') ) {
					  get_template_part( 'loop-templates/content', 'contact' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}
					?>
					<?php 
					if ( is_page('about') ) {
					  get_template_part( 'loop-templates/content', 'about' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}
					?>
		

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
