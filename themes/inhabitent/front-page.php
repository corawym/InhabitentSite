<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <section class="front-page-latest-journals">
      <h2>Inhabitent Journal</h2>
      <div class="journals-blocks">
        <?php
          $args = array( 
            'post_type' => 'post', 
            'posts_per_page' => 3, 
            'orderby' => 'date',
            'order' => 'DESC'
            );
          $latest_blog_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $latest_blog_posts as $post ) : setup_postdata( $post ); ?>

            <div class="journals-blocks-wrapper">
              <div class="journals-blocks-thumbnail">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'large' ); ?>
                <?php endif; ?>
              </div>
              <div class="journals-blocks-info">
                <?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
                <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
              </div><!-- .journals-blocks-info -->
              <a href=<?php echo get_permalink() ?>>read more</a>
              
            </div><!-- .journals-blocks-wrapper -->
            
        <?php endforeach; wp_reset_postdata(); ?>
      </div><!-- .journals-blocks -->

    </section><!-- .front-page-latest-journals -->
		




		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
