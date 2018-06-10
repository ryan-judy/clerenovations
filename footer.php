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

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">
<!-- Footer -->
<footer class="page-footer font-small bg-dark lighten-3 pt-4 mt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
        <p>Here you can use rows and columns here to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li><p><a href="#!">PROJECTS</a></p></li>
          <li><p><a href="#!">ABOUT US</a></p></li>
          <li><p><a href="#!">BLOG</a></p></li>
          <li><p><a href="#!">AWARDS</a></p></li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li><p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p></li>
          <li><p><i class="fa fa-envelope mr-3"></i> info@example.com</p></li>
          <li><p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p></li>
          <li><p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p></li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb"><i class="fa fa-facebook"></i></a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw"><i class="fa fa-twitter"></i></a>
        <!-- Google +-->
        <a type="button" class="btn-floating btn-gplus"><i class="fa fa-google-plus"></i></a>
        <!-- Dribbble -->
        <a type="button" class="btn-floating btn-dribbble"><i class="fa fa-dribbble"></i></a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center">© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> CityLinkRenovations.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

