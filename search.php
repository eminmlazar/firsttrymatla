<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package EasyMag
 */
get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9">
				<section id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'easymag' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
							?>
						<?php endwhile; ?>
						<?php the_posts_navigation(); ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
					</main><!-- #main -->
				</section><!-- #primary -->
			</div><!-- .col-lg-9 -->
			<div class="col-lg-3 col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>
