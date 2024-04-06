<?php
            $homepageEvents = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'Oil Change'
            ));
            while ($homepageEvents->have_posts()) {
                $homepageEvents->the_post(); ?>
                <li> <?php the_title(); ?> </li>
            <?php }
            ?>
<?php

/**
 * The Template for displaying all single posts.
 *
 * @package Guideline
 */

get_header(); ?>

<div class="container">
    <div class="sitecontent-area">
        <section class="site-main">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('Oil Change'); ?>">
                        <i class="fa fa-home" aria-hidden="true"></i> Oil Change</a>
                    <span class="metabox__main"><?php the_title(); ?> </span>
                </p>
            </div>
            
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', 'single'); ?>
                <?php the_post_navigation(); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number())
                    comments_template();
                ?>
            <?php endwhile; // end of the loop. 
            ?>
        </section>
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- sitecontent-area -->
</div><!-- container -->
<?php get_footer(); ?>