<?php
/**
 * The shop page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php query_posts( array( 'post_type' =>'adventure', 'order' => 'ASC' ) ); ?>

			<?php if ( have_posts() ) : ?>

        <header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">','</h1>' );
					?>
					
				</header><!-- .page-header -->

        <div class="adventure-grid">

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <div class="adventure-grid-item">

            <?php if ( has_post_thumbnail() ) : ?>
              <a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'large' ); ?></a>
            
            <?php endif; ?>

              <div class="adventure-item-info">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <a class="btn-white-border" href=<?php echo get_permalink() ?>>read more</a>
              </div>


            </div><!-- .product-grid-item -->

          <?php endwhile; ?>
        </div><!-- .product-grid -->

      <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>