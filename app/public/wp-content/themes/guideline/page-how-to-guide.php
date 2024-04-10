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
=======
/*
 * Template Name: How to Guide
 * Template Post Type: page

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
=======

            <?php
            // Breadcrumb for parent pages
            if (!is_front_page()) {
                echo '<div class="breadcrumbs">';
                echo '<a href="' . esc_url(home_url('/')) . '">Home</a> / ';

                if (is_page()) {
                    $ancestors = get_post_ancestors(get_the_ID());
                    if ($ancestors) {
                        $ancestors = array_reverse($ancestors);
                        foreach ($ancestors as $ancestor) {
                            echo '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a> / ';
                        }
                    }
                }
                echo '<span>' . get_the_title() . '</span>';
                echo '</div>';
            }
            ?>

            <?php
            while (have_posts()) :
                the_post();
                get_template_part('content', 'page');

                // Display comments if they are open or if there are comments
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            endwhile;
            ?>

            <?php
            $custom_post_types = array(
                'Oil Change' => 'Oil Change',
                'Air Filter' => 'Air Filter',
                'Fluid Levels' => 'Fluid Levels'
            );

            foreach ($custom_post_types as $post_type_slug => $post_type_label) :
                $args = array(
                    'post_type' => $post_type_slug,
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        // Display post title and content
                        echo '<h2>' . get_the_title() . '</h2>';
                        the_content();
                    endwhile;
                else :
                    echo 'No "' . $post_type_label . '" posts found';
                endif;

                // Reset post data
                wp_reset_postdata();
            endforeach;
            ?>

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
=======

<?php get_footer(); ?>




