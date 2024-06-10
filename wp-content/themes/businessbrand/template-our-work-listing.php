<?php
/*
 * Template Name: Our Work Listing
 * Description: A custom template for displaying all "Our Work" posts.
 */

get_header('inner');
?>

<div id="primary" class="content-area container">
    <main id="main" class="site-main">

        <?php
        // Custom query to retrieve all "Our Work" posts
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $our_work_query = new WP_Query(array(
            'post_type'      => 'our_work', // Your custom post type slug
            'posts_per_page' => 8, // Display 8 posts per page
            'paged'          => $paged, // Current page
            'orderby'        => 'date', // Order by publication date
            'order'          => 'DESC', // Newest first
        ));

        // Check if there are any posts
        if ($our_work_query->have_posts()) :
        ?>


            <div class="work-grid">
                <div class="row">
                    <?php
                    // Start the loop
                    $post_count = 0;
                    while ($our_work_query->have_posts()) :
                        $our_work_query->the_post();
                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 padding-bottom-20 our_word_card">
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="our-work-card-img-top">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                                    </a>
                                </div>
                                <div class="our_work_card-body text-center">
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="our_work_card_text">
                                        <p>
                                        <?php echo get_trimmed_excerpt(100); // Limit excerpt to 100 characters ?>
                                        </p>
                                    </div>
                                </div>

                            </div><!-- #post-<?php the_ID(); ?> -->
                        </div><!-- .col-md-3 -->
                    <?php
                        $post_count++;
                        // Close the row if 4 posts are displayed or if it's the last post
                        if ($post_count % 4 === 0 || $post_count === $our_work_query->post_count) {
                            echo '</div><div class="row">';
                        }
                    endwhile;
                    ?>
                </div><!-- .row -->
            </div><!-- .work-grid -->

        <?php
            // Pagination
            the_posts_pagination(array(
                'prev_text' => __('&laquo;', 'text-domain'),
                'next_text' => __('&raquo;', 'text-domain'),
            ));

            // Restore original post data
            wp_reset_postdata();
        else :
            // If no posts are found
        ?>
            <p><?php _e('No Our Work posts found.', 'text_domain'); ?></p>
        <?php
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer('inner');
?>