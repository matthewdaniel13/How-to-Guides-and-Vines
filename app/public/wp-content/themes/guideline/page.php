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
            <?php if (is_page_template('how-to-guide.php') || is_page('about-us') ): ?>
                <div class="metabox metabox--position-up metabox--with-home-link">
                    <p class="breadcrumb">
                        <a class="metabox__blog-home-link" href="<?php echo site_url('/about-us'); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Back to About Us
                        </a>
                        <span class="separator">/</span>
                        <?php if (is_page('vines')) : ?>
                            <span>Vines</span>
                        <?php else : ?>
                            <span><?php the_title(); ?></span>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="page-links">
                    <!-- You can add additional page links or content here -->
                </div>

                <?php if (is_page('about-us') || is_page('vines')) : ?>
                    <!-- Display "Our Goals" link only on the "About Us" and "Vines" pages -->
                    <div class="our-goals">
                        <a href="<?php echo site_url('/our-goals'); ?>" class="blue-box">Our Goals</a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', 'page'); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                }
                ?>
            <?php endwhile; ?>
        </section><!-- section-->
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- .sitecontent-area -->
</div><!-- .container -->
<?php get_footer(); ?>


	<div class="container">
      <div class="sitecontent-area">
    		 <section class="site-main">
            		<?php while( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
                        <?php
                            //If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template();
                            ?>
                    <?php endwhile; ?>
            </section><!-- section-->   
     <?php get_sidebar();?>
    <div class="clear"></div>
    </div><!-- .sitecontent-area --> 
 </div><!-- .container --> 

<?php get_footer(); ?>
=======
<?php get_footer(); ?>


