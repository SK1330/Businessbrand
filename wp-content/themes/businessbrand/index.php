<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                // Your post content
            endwhile;
        else :
            // Content to display if no posts are found
        endif;
        ?>
    </main>
</div>

<?php get_footer(); ?>
