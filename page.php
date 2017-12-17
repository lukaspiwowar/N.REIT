<?php get_header(); ?>
	<main >
	
	
	
	
	
		<?php while ( have_posts() ) : the_post(); ?>

			<?php do_action( 'basic_before_page_article' ); ?>
			<article class="post page" id="pageid-<?php the_ID(); ?>">
				
				<?php do_action( 'basic_before_page_title' );  ?>
				<?php do_action( 'basic_after_page_title' );  ?>

				<?php do_action( 'basic_before_page_content_box' );  ?>
			
					<?php do_action( 'basic_before_page_content' );  ?>
					<?php the_content(); ?>
					<?php do_action( 'basic_after_page_content' );  ?>


				<?php do_action( 'basic_after_page_content_box' );  ?>

			</article>
			<?php do_action( 'basic_after_page_article' ); ?>


			<?php 

			if ( comments_open() || get_comments_number() ) {
				do_action( 'basic_before_page_comments_area' );
				comments_template();
				do_action( 'basic_after_page_comments_area' );
			}

		endwhile; ?>
		
	</main> <!-- #content -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>