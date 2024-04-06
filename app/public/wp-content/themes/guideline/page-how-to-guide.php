<?php
/*
 * Template Name: How to Guide
 * Template Post Type: page
 */

get_header(); ?>

<div class="container">
    <div class="sitecontent-area">
        <section class="site-main">
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
        </section><!-- .site-main -->
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- .sitecontent-area -->
</div><!-- .container -->

<?php get_footer(); ?>
