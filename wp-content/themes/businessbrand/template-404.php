<?php
/*
 * Template Name: custom 404 page
 * Description: A custom template for a 404 page.
 */
get_header('inner'); // Use 'inner' header if needed
?>

<div id="primary" class="content-area jai shree">
    <main id="main" class="site-main">
        <?php
        // Start the loop
        while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    the_content(); // Display post content
                    ?>
                </div><!-- .entry-content -->

            </article><!-- #post-<?php the_ID(); ?> -->
        <?php
        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>

