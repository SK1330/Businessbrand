<?php

/**
 * The template for displaying single "our_work" posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourTheme
 */

get_header('inner');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        the_content(); // Display post content
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer('inner');
?>