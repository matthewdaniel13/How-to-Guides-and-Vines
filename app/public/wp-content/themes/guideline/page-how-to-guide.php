<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Guideline
 */

get_header(); ?>

<div class="container">
    <div class="sitecontent-area">
        <section class="site-main">
            <?php
            /*
 * Template Name: How to Guide
 * Template Post Type: page
 */

            get_header();

            // Define custom query arguments
            $args = array(
                'post_type' => 'Oil Change', // Custom post type slug
                'posts_per_page' => -1, // Display all posts
            );

            // Instantiate a new WP_Query object
            $query = new WP_Query($args);

            // Check if there are any posts
            if ($query->have_posts()) :
                // Start the loop
                while ($query->have_posts()) : $query->the_post();
                    // Display post content
                    the_title('<h2>', '</h2>');
                    the_content();
                endwhile;
                // Reset post data
                wp_reset_postdata();
            else :
                // If no posts are found
                echo 'No posts found';
            endif;

            ?>



            <?php
            /*
 * Template Name: How to Guide
 * Template Post Type: page
 */

            get_header();

            // Define custom query arguments
            $args = array(
                'post_type' => 'Air Filter', // Custom post type slug
                'posts_per_page' => -1, // Display all posts
            );

            // Instantiate a new WP_Query object
            $query = new WP_Query($args);

            // Check if there are any posts
            if ($query->have_posts()) :
                // Start the loop
                while ($query->have_posts()) : $query->the_post();
                    // Display post content
                    the_title('<h2>', '</h2>');
                    the_content();
                endwhile;
                // Reset post data
                wp_reset_postdata();
            else :
                // If no posts are found
                echo 'No posts found';
            endif;



            ?>


<?php
            /*
 * Template Name: How to Guide
 * Template Post Type: page
 */

            get_header();

            // Define custom query arguments
            $args = array(
                'post_type' => 'Fluid Levels', // Custom post type slug
                'posts_per_page' => -1, // Display all posts
            );

            // Instantiate a new WP_Query object
            $query = new WP_Query($args);

            // Check if there are any posts
            if ($query->have_posts()) :
                // Start the loop
                while ($query->have_posts()) : $query->the_post();
                    // Display post content
                    the_title('<h2>', '</h2>');
                    the_content();
                endwhile;
                // Reset post data
                wp_reset_postdata();
            else :
                // If no posts are found
                echo 'No posts found';
            endif;

            ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', 'page'); ?>
                <?php

                //If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number())
                    comments_template();
                ?>
            <?php endwhile; ?>

        </section><!-- section-->
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- .sitecontent-area -->
</div><!-- .container -->
<?php get_footer(); ?>