<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h1>
					<?php echo the_title(); ?>
				</h1>
				<div class="post_content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // End of the loop. ?>

		</main>
	</div>

<?php
get_footer();