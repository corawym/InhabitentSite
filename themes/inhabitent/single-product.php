<?php
/**
 * The template for displaying single product pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="single-product-image">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div><!-- .product-image-wrappe -->

				<div class="single-product-content">
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
							) );
						?>
						<p class="single-product-price"><?php echo CFS()->get( 'price' ); ?></p>
						<?php echo the_content('<h2 class="single-product-description">' , '</h2>' ); ?>
					</div><!-- .entry-content -->

				</div><!-- .product-content-wrapper -->
			
			<?php endwhile; // End of the loop. ?>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>