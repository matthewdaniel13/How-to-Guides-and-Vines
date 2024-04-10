<?php

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
            // Define custom query arguments
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post', // Adjust post type as needed
                'posts_per_page' => 2, // Number of posts per page
                'paged' => $paged
            );
            $query = new WP_Query($args);

            // Loop through posts and display content
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    // Display post content
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                <?php
                endwhile;

                // Display pagination links
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'prev_text' => __('« Previous'),
                    'next_text' => __('Next »'),
                ));
            endif;
            wp_reset_postdata();
            ?>

        </section><!-- .site-main -->
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- .sitecontent-area -->
</div><!-- .container -->

<?php get_footer(); ?>


