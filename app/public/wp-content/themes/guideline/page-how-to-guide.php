<?php
/*
 * Template Name: How to Guide
 * Template Post Type: page
 */

get_header(); ?>

<div class="container">
    <div class="sitecontent-area">
        <section class="site-main">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', 'page'); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number())
                    comments_template();
                ?>
            <?php endwhile; ?>

            <?php
            // Define custom query arguments for all custom post types
            $args_all_posts = array(
                'post_type' => array('Oil Change', 'Air Filter', 'Fluid Level'), // Adjust as needed
                'posts_per_page' => 5, // Adjust as needed
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // Enable pagination
            );

            // Instantiate a new WP_Query object for all custom post types
            $query_all_posts = new WP_Query($args_all_posts);

            // Check if there are any posts
            if ($query_all_posts->have_posts()) :
                while ($query_all_posts->have_posts()) : $query_all_posts->the_post();
                    // Display post title and content
                    the_title('<h2>', '</h2>');
                    the_content();
                endwhile;
                // Display pagination links
                echo paginate_links(array(
                    'total' => $query_all_posts->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'prev_text' => __('« Previous'),
                    'next_text' => __('Next »'),
                ));
                // Reset post data
                wp_reset_postdata();
            else :
                echo 'No posts found';
            endif;
            ?>

        </section><!-- .site-main -->
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- .sitecontent-area -->
</div><!-- .container -->

<?php get_footer(); ?>

