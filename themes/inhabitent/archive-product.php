<?php
/**
 * The shop page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php query_posts( array( 'post_type' =>'product', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
			<?php
				$args = array( 'post_type' => 'product-type' );
				$all_product_types = get_terms( $args ); // returns an array of product types
			?>
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">','</h1>' );
						// the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
					<ul class="product-type-list">
						<?php foreach ( $all_product_types as $product_type ) : setup_postdata( $product_type ); ?>
							<li>	
								<p><a class="product-type-link" href=<?php echo home_url() . '/product-type/' . $product_type->slug; ?>><?php echo $product_type->name; ?></a></p>
							</li>		
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</header><!-- .page-header -->

				<div class="product-grid">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-grid-item">

						<?php if ( has_post_thumbnail() ) : ?>
						<div class="product-item-thumbnail">
							<a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'large' ); ?></a>
						</div>
						<?php endif; ?>

						<div class="product-item-info">

							<?php the_title('<h2 class="entry-title">' , '</h2>' ); ?>
							<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
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