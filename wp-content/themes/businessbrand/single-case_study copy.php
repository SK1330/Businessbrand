<?php
/*
Template Name: Single Case Study
*/

get_header('inner');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="row">
                    <div class="col-md-6 case_study_left">
                    <div class="case-study-images">
                            <?php
                            // Get the gallery shortcode from the post content
                            $gallery_shortcode = get_post_gallery();
                            if ( $gallery_shortcode ) {
                                // Output the gallery
                                echo do_shortcode( $gallery_shortcode );
                            }
                            ?>
                        </div><!-- .case-study-images -->
                    </div><!-- .col-md-6 -->

                    <div class="col-md-6 case_study_right">

                        <div class="entry-content">
                            <!-- Display content excluding gallery -->
                            <?php
                            $content = get_the_content();
                            $content_without_gallery = preg_replace( '/\[gallery.*?\]/', '', $content ); // Remove gallery shortcode
                            echo apply_filters( 'the_content', $content_without_gallery );
                            ?>
                        </div><!-- .entry-content -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </article><!-- #post-<?php the_ID(); ?> -->
            <?php
        endwhile;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
