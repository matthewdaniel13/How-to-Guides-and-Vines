<?php get_header(); ?>

<div class="container">
    <div class="sitecontent-area">
        <section class="site-main">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-meta">
                            <span class="posted-on"><?php echo get_the_date(); ?></span>
                        </div>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->
            <?php endwhile; // end of the loop. ?>
        </section><!-- .site-main -->
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- .sitecontent-area -->
</div><!-- .container -->

<?php get_footer(); ?>
