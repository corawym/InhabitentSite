<?php
/**
 * The template for displaying product type pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php single_term_title(); ?></h1>
					<?php the_archive_description( '<p class="taxonomy-description">', '</p>' ); ?>
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
							<div class="line"></div>
							<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
							<h2 class="price"><?php echo CFS()->get( 'price' ); ?></h2>
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