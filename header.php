<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Arimo|Open+Sans:400,700" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<script
  src="https://cdnjs.cloudflare.com/ajax/libs/mhayes-twentytwenty/1.0.0/js/jquery.event.move.min.js"
  ></script>
  	<script
  src="https://cdnjs.cloudflare.com/ajax/libs/mhayes-twentytwenty/1.0.0/js/jquery.twentytwenty.min.js"
  ></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar">


		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>
	<div class = "container">

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="/wp-content/uploads/2017/11/cropped-Blue-Logo.-Vector-web-e1510014559955.png" width="100" height="100" class="d-inline-block align-top" alt=""></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="/wp-content/uploads/2017/11/cropped-Blue-Logo.-Vector-web-e1510014559955.png" width="100" height="100" class="d-inline-block align-top" alt=""></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'navbarSupportedContent collapse navbar-collapse justify-content-end',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav pr-4',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>
					<a class="btn btn-primary consultation" href="#"> <i class='fa fa-calendar'></i>  Free Consultation </a>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->

</div>
