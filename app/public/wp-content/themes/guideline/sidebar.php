<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>              
        <aside id="archives" class="widget"> 
            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'guideline' ); ?></h3>          
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>        
         
        <aside id="meta" class="widget"> 
            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'guideline' ); ?></h3>          
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>	

    <!-- Custom Query 1 -->
    <aside class="widget">
        <h3 class="widget-title">Custom Query 1</h3>
        <ul>
            <?php
            $popular_post_args = array(
                'post_type'      => array('Oil Change','Air Filter','Fluid Level'),
                'posts_per_page' => 1,
                'orderby'        => 'comment_count',
                'order'          => 'DESC',
            );
            $popular_posts = new WP_Query( $popular_post_args );

            if ( $popular_posts->have_posts() ) :
                while ( $popular_posts->have_posts() ) : $popular_posts->the_post();
            ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<li>No posts found</li>';
            endif;
            ?>
        </ul>
        <ul>
            <?php
            $oil_change_args = array(
                'post_type'      => 'Oil Change',
                'posts_per_page' => 1,
                'category_name'  => 'oil-change',
            );
            $oil_change_guides = new WP_Query( $oil_change_args );

            if ( $oil_change_guides->have_posts() ) :
                while ( $oil_change_guides->have_posts() ) : $oil_change_guides->the_post();
            ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<li>No posts found</li>';
            endif;
            ?>
        </ul>
    </aside>

    <!-- Custom Query 2 -->

    <!-- Add more custom queries as needed -->

</div><!-- sidebar -->


