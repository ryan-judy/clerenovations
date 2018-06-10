<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

the_content();

?>

<div class="col-lg-4">
  <div class="card card-body text-center">
                            <!--Title-->
                            <h4 class="card-title text-center"><?php the_title(); ?></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text"><?php the_field('module_1_content', false, false); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-elegant bg-dark">LEARN MORE</a>

                        </div>

</div>