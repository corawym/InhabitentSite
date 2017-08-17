<?php
/**
 * The front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class="front-page-hero">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Inhabitent full logo">

      </section><!-- .front-page-hero -->

      <section class="front-page-shop">
        <h2>Shop Stuff</h2>
        <div class="shop-blocks">

          <?php
            $args = array( 'post_type' => 'product-type' );
            $all_product_types = get_terms( $args ); // returns an array of product types
          ?>

          <?php foreach ( $all_product_types as $product_type ) : setup_postdata( $product_type ); ?>
            <div class="shop-blocks-wrapper">
              <img src=<?php echo get_stylesheet_directory_uri() . '/images/product-type-icons/' . $product_type->slug . '.svg'; ?> alt=<?php echo $product_type->name; ?>>
              <p><?php echo $product_type->description; ?></p>
              <p><a class="btn-green" href=<?php echo home_url() . '/product-type/' . $product_type->slug; ?>><?php echo $product_type->name?> Stuff</a></p>
            </div>
          <?php endforeach; wp_reset_postdata(); ?>
          
        </div><!-- .shop-blocks -->
      </section><!-- .front-page-shop -->

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
            
            <article class="journals-blocks-wrapper">
              <div class="journals-blocks-thumbnail">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'large' ); ?>
                <?php endif; ?>
              </div>

              <div class="journals-blocks-info">
                <?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
                <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                <a class="btn-black-border" href=<?php echo get_permalink() ?>>read more</a>    
              </div><!-- .journals-blocks-info -->
            </article><!-- .journals-blocks-wrapper -->

          <?php endforeach; wp_reset_postdata(); ?>
          
        </div><!-- .journals-blocks -->
      </section><!-- .front-page-latest-journals -->
      
      <section class="front-page-adventures">
        <h2>Latest Adventures</h2>
      </section><!-- .front-page-adventures -->


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
