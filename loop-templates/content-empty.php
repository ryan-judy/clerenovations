<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

the_content();


?>



        <div class="jarallax hm-white-light view" data-jarallax='{"speed": 0.2}' style="background-image: url(<?php the_field('hero_image'); ?>);">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h1 class="display-1 text-dark mb-5 wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_heading')?>
                                </h1>
                                <h5 class="font-up mb-5 mt-1 text-dark spacing font-bold wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_subhead')?></h5>
                                <a href="<?php the_field('hero_button_1_link')?>" class="btn btn-elegant bg-dark btn-lg wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_button_1_cta')?></a>
                                <a href="<?php the_field('hero_button_2_link')?>" class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_button_2_cta')?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class= "container-fluid py-5" style="background-image: url(<?php the_field('component_image_1', 81); ?>);">
    <div class="container">
    <div class="row">
        <div class="col-lg-5 text-left">
            <h2 class="h2-responsive text-dark font-bold wow fadeIn"><?php the_field('component_heading_2', false, false); ?></h2>
                        <p class="section-description lead text-dark"><?php the_field('component_subhead_2', false, false); ?></p>

        </div>
    <div class="col-lg-7 mt-3 pl-4">
        <h4 class="text-dark font-light my-5"><i class="fa fa-trophy pr-4"></i> Award Winning Renovation/Remodeling Company</h4>
        <h4 class="text-dark my-5"><i class="fa fa-user pr-4"></i> Dedicated & Specialized Team of Professionals</h4>
        <h4 class="text-dark my-5"><i class="fa fa-heart pr-4"></i> Trusted by over 2,500 homeowners</h4>
    </div>
    </div>
    </div>

</div>


<!--/Section: Best features-->

        <div class="container-fluid py-5 bg-dark">
            <div class = "container">
        <div class="divider-new my-4">
            <h2 class="h2-responsive text-light mx-4 font-bold wow fadeIn"><?php the_field('component_heading'); ?></h2>
        </div>

        <!--Section: Features v.1-->
        <section class="section feature-box text-center">
            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'service', 'post_status'=>'publish', 'posts_per_page'=>4)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
  
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
         <div class="col-md-3 mb-r">
                    <div class="card card-body text-center bg-light">
                            <!--Title-->
                            <h4 class="card-title text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <hr>
                            <!--Text-->
                            <a href="<?php the_permalink(); ?>" class="btn btn-elegant bg-dark">LEARN MORE</a>

                     </div> 
                </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
  
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


            </div>
            <!--Grid row-->
            </div>
        </section>
        <!--Section: Features v.1-->
</div>
<div class= "container pt-4">
        <!--Section: Best features-->
        <section id="best-features">

            <div class="row pt-3">
<?php if( have_rows('module_1_imgae') ): ?>


    <?php while( have_rows('module_1_imgae') ): the_row(); 

        // vars
            $image = get_sub_field('before');

        $image2 = get_sub_field('after');


        ?>
                <!--First columnn-->
                <div class="col-lg-4 mb-r">

                    <!--Card-->
                    <div class="card hoverable wow fadeIn">

                        <!--Card image-->
                        <div class="twentytwenty-container">

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt'] ?>" />

            </div>


                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title text-center"><?php the_field('module_1_heading'); ?></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text"><?php the_field('module_1_content', false, false); ?></p>
                            <a href="<?php the_field('module_1_button_link'); ?>" class="btn btn-elegant bg-dark"><?php the_field('module_1_button_cta'); ?></a>

                        </div>
            <?php endwhile; ?>


<?php endif; ?>

                    </div>
                    <!--/.Card-->
                </div>
<?php if( have_rows('module_1_imgae') ): ?>


    <?php while( have_rows('module_1_imgae') ): the_row(); 

        // vars
            $image = get_sub_field('before');

        $image2 = get_sub_field('after');


        ?>
                <!--First columnn-->
                <div class="col-lg-4 mb-r">

                    <!--Card-->
                    <div class="card hoverable wow fadeIn">

                        <!--Card image-->
                        <div class="twentytwenty-container">

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt'] ?>" />

            </div>


                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title text-center"><?php the_field('module_1_heading'); ?></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text"><?php the_field('module_1_content', false, false); ?></p>
                            <a href="<?php the_field('module_1_button_link'); ?>" class="btn btn-elegant bg-dark"><?php the_field('module_1_button_cta'); ?></a>

                        </div>
            <?php endwhile; ?>


<?php endif; ?>

                    </div>
                    <!--/.Card-->
                </div>

 <?php if( have_rows('module_1_imgae') ): ?>


    <?php while( have_rows('module_1_imgae') ): the_row(); 

        // vars
            $image = get_sub_field('before');

        $image2 = get_sub_field('after');


        ?>
                <!--First columnn-->
                <div class="col-lg-4 mb-r">

                    <!--Card-->
                    <div class="card hoverable wow fadeIn">

                        <!--Card image-->
                        <div class="twentytwenty-container">

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt'] ?>" />

            </div>


                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title text-center"><?php the_field('module_1_heading'); ?></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text"><?php the_field('module_1_content', false, false); ?></p>
                            <a href="<?php the_field('module_1_button_link'); ?>" class="btn btn-elegant bg-dark"><?php the_field('module_1_button_cta'); ?></a>

                        </div>
            <?php endwhile; ?>


<?php endif; ?>

                    </div>
                    <!--/.Card-->
                </div>

                               
            </div>

        </section>
        <!--/Section: Best features-->
</div>
 

<div class = "container">
<!--Section: Testimonials v.2-->
<section class="text-center">
                <div class="divider-new mb-0">

    <!--Section heading-->
<div class="divider-new">
            <h2 class="h2-responsive text-dark mx-4 font-bold wow fadeIn"><?php the_field('component_3_heading', false, false); ?></h2>
        </div>

</div>
    <!--Section description-->
    <div class="wow fadeIn">

    <!--Carousel Wrapper-->
    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel" data-interval="false">
    
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar pb-4">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i><?php the_field('testimonial_1_quote')?></p>
    
                    <h4><?php the_field('testimonial_1_author')?></h4>
                    <h6><?php the_field('testimonial_1_company')?></h6>
    

                </div>
    
            </div>
            <!--First slide-->
    
            <!--Second slide-->
            <div class="carousel-item">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar pb-4">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i><?php the_field('testimonial_2_quote')?></p>
    
                    <h4><?php the_field('testimonial_2_author')?></h4>
                    <h6><?php the_field('testimonial_2_company')?></h6>
    

                </div>
    
            </div>
            <!--Second slide-->
    
            <!--Third slide-->
            <div class="carousel-item">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar pb-4">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i> <?php the_field('testimonial_3_quote')?></p>
    
                    <h4><?php the_field('testimonial_3_author')?></h4>
                    <h6><?php the_field('testimonial_3_company')?></h6>
    
                </div>
    
            </div>
            <!--Third slide-->
    
        </div>
        <!--Slides-->
    
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
            <i class="fa fa-angle-left fa-3x text-dark"></i>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next text-faded" href="#carousel-example-1" role="button" data-slide="next">
            <i class="fa fa-angle-right fa-3x text-dark"></i>
            <span class="sr-only">Next</span>
        </a>
        <!--Controls-->
    
    </div>
    <!--Carousel Wrapper-->
    </div>
</section>
<!--Section: Testimonials v.2-->
</div>

<div class = "container">
    <div class = "row">
    </div>
    </div>


