<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
            <section class="fp-adventure">
			<h2>Latest Adventures</h2>
		<div class="adventure-entries">
				<?php 
				$args = array(  'post_type' => 'adventure',
								 'numberposts' => '4', 
				);
				$adventure_posts = get_posts( $args );
				?>
				<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
				
				<!-- <div class="thumbnail"> -->

			<div class="fp-adventure-content">
				
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="adventure-thumbnail">
    				<a href="<?php the_permalink(); ?>" title="<?php the_title()?>">
        				<?php the_post_thumbnail('large'); ?>
			   		</a>
				</div>
				   
				<?php endif; ?>
			
                <h3>
					<a href="<?php the_permalink(); ?>"><h2><?php the_title()?></h2></a>
					<a class="read-more-btn" href="<?php the_permalink(); ?>">Read More</a>
				</h3>

				<a href="<?php the_permalink(); ?>"><h4>More Adventure</h4></a>
			</div>
				  <?php endforeach; wp_reset_postdata(); ?>
		</div>	
		
			
			 </section>
			</header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            


            </div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
