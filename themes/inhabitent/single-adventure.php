<?php
/**
 * The template for displaying single product pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="single-adventure-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php endif; ?>
					</div><!-- .single-product-image -->

					<div class="single-adventure-content">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              <h2>by <?php the_author(); ?></h2>
						</header><!-- .entry-header -->
						<div class="entry-content">
              
							<?php the_content('<p class="single-adventure-description">' , '</p>' ); ?>
						</div><!-- .entry-content -->

						<div class="social-button">
							<button type="button" class="btn-black-border">
								<i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
								like
							</button>
							<button type="button" class="btn-black-border">
								<i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
								tweet
							</button>
							<button type="button" class="btn-black-border">
								<i class="fa fa-pinterest fa-fw" aria-hidden="true"></i>
								pin
							</button>
						</div>

					</div><!-- .single-product-content -->
				</article>



      <?php endwhile; // End of the loop. ?>

			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>