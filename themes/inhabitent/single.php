<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

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

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
