<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		<div class="view-two hm-white-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(<?php the_field('featured_image'); ?>);">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h4 class="display-2 white-text text-uppercase mb-5 wow fadeInDown" data-wow-delay="0.3s"> <?php the_title();?>

                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class = "container">

    <header class="entry-header">


    </header><!-- .entry-header -->

    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

    <div class="entry-content">

        <?php the_content(); ?>

        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
            'after'  => '</div>',
        ) );
        ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->


		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
</div>