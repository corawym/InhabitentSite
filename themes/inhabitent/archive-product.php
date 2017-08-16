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
		
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>