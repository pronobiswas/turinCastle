<?php
/**
 * Template Name: Galary Page
 * Description: Custom galary page template
 */

get_header(); ?>

<div id="galarypage-content">
    <main id="primary" class="site-main">
        <h1 class="galarypageTitle">Galary Page</h1>
        <!-- ======galary section start====== -->
        <section id="galarySection">
            <div class="custom-posts-wrapper">
                <?php 
                // Query latest posts 
                $args = array( 'post_type' => 'post', 'posts_per_page' => 5, ); 
                $query = new WP_Query( $args ); 
                if ( $query->have_posts() ) : echo '<div class="post-grid">'; while ( $query->have_posts() ) : $query->the_post(); ?>
                <article class="post-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-thumbnail">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?> </div>
                    <div class="post-excerpt"> <?php the_excerpt(); ?> </div>
                </article>
                <?php endwhile; echo '</div>'; wp_reset_postdata(); else : echo '<p>No posts found.</p>'; endif; ?>
            </div>
        </section>
    </main>
</div>


<?php get_footer(); ?>