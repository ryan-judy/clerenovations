<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

?>

<!-- Intro Section -->
        <div class="view-two hm-white-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(<?php the_field('hero_image'); ?>); background-position:bottom; ">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h4 class="display-2 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_header') ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--Second container-->
        <div class="container-fluid py-5 bg-light">
            <div class = "container">
            <h2 class="h2-responsive text-dark text-center mx-4 font-bold wow fadeIn"><?php the_field('partner_subhead', false, false); ?></h2>

        <!--Section: Features v.1-->
        <section class="section feature-box text-center">

            <!--Section description-->

            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-wrench blue-text"></i>
                    <h5 class="font-bold text-dark mt-3"><?php the_field('partner_1_headlines'); ?></h5>
                    <p class="text-dark"><?php the_field('partner_1_description', false, false); ?></p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-bookmark blue-text"></i>
                    <h5 class="font-bold text-dark mt-3"><?php the_field('partner_2_headline'); ?></h5>
                    <p class="text-dark"><?php the_field('partner_2_description', false, false); ?></p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-users blue-text"></i>
                    <h5 class="font-bold text-dark mt-3"><?php the_field('partner_3_headline'); ?></h5>
                    <p class="text-dark"><?php the_field('partner_3_description', false, false); ?></p>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            </div>
        </section>

                <div class="container pb-5 text-center">
            <!--First row-->
            <div class="row wow fadeIn" data-wow-delay="0.2s" style="margin-top: 0px;">

  <!--Main information-->

                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.2s">
                    <h3 class="text-center title my-5 pt-2 dark-grey-text font-bold wow fadeIn" data-wow-delay="0.2s">
    <div class="divider-new">
                        <strong class = "mx-4 text-dark"><?php the_field('component_1_header') ?></strong>
                    </div>
                    </h3>
                    <p class="section-description lead text-dark mt-3"><?php the_field('component_1_content', false, false) ?>

</p>
                    <a href="/contact" class="btn btn-elegant btn-lg"><?php the_field('component_1_button_CTA') ?></a>
                </div>
            </div>
            <!--/.First row-->


            <!--/.Second row-->
        </div>
        <!--Section: Features v.1-->
</div>