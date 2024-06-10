<?php
/*
Template Name: Case Studies Listing
*/

get_header('inner');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!--
            <header class="page-header">
             <h1 class="page-title"> <?php the_title(); ?></h1>
        </header>
         -->
        <div class="case-studies-list container">
            <?php
            $args = array(
                'post_type'      => 'case_study',
                'posts_per_page' => 8, // Display 8 case studies per page
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1, // Enable pagination
                'orderby'        => 'date', // Order by publication date
                'order'          => 'DESC', // Newest first
            );

            $case_studies_query = new WP_Query($args);

            if ($case_studies_query->have_posts()) :
                $count = 0;
                while ($case_studies_query->have_posts()) :
                    $case_studies_query->the_post();
                    if ($count % 2 === 0) echo '<div class="row">'; // Open a new row every 2 case studies
            ?>
                    <div class="col-md-6 padding-bottom-20">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <a href="<?php the_permalink(); ?>">
                                <div class="case-study-card">
                                    <div class="caseStudy-card-body text-center">
                                        <?php the_post_thumbnail('full'); ?>
                                        <div class="caseStudy_inner_content">
                                            <h2 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            <p>
                                                <?php echo wp_trim_words(get_the_excerpt(), 30);?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </article>
                    </div>
            <?php
                    if ($count % 2 !== 0 || $count === $case_studies_query->post_count - 1) echo '</div>'; // Close the row every 2 case studies or at the end of the loop
                    $count++;
                endwhile;

                // Pagination
                the_posts_pagination(array(
                    'prev_text' => __('&laquo;', 'text-domain'),
                    'next_text' => __('&raquo;', 'text-domain'),
                ));

                wp_reset_postdata();
            else :
                echo '<p>No case studies found.</p>';
            endif;
            ?>
        </div><!-- .case-studies-list -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer('inner');
?>