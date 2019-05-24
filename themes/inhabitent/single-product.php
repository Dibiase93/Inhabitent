<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	            <header class="entry-header">
		            <?php if ( has_post_thumbnail() ) : ?>
			        <?php the_post_thumbnail( 'large' ); ?>
		            <?php endif; ?>

		            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		            <div class="entry-meta">
			        <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		            </div><!-- .entry-meta -->
	                </header><!-- .entry-header -->

	                <div class="entry-content">
		            <?php the_content(); ?>
		            <?php
			         wp_link_pages( array(
				    'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				    'after'  => '</div>',
			        ) );
		        ?>
	            </div><!-- .entry-content -->

	            <footer class="entry-footer">
		        <?php red_starter_entry_footer(); ?>
	            </footer><!-- .entry-footer -->
                </article><!-- #post-## -->

                <?php echo CFS()->get( 'product_price' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
