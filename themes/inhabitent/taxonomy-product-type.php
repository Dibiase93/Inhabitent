<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

        <header class="product-type">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            
            <div class="article-container">
			<?php while ( have_posts() ) : the_post(); ?>

				
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                     
                    
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        <?php endif; ?>
                        
                        <div class="product-content">
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            <span class="entry-price"><?php echo CFS()->get( 'product_price' );?></span>
                        </div>

                        <?php if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
                            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                        </div><!-- .entry-meta -->
            

                        <?php endif; ?>
                

                </article><!-- #post-## -->
				

			<?php endwhile; ?>
            </div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
