<?php get_header(); ?>
	<main >

	<?php while ( have_posts() ) : the_post(); ?>

		<div id="imageContainer">

			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(1920,310)); }  ?>

			<div id="title-text">
				<span id="title">02</span><span id="title-dot" style="margin-right: 2%;">.</span><span id="title" style="margin-right: 8%;">Projekty</span>
			</div> 

			<?php 

			// To poniżej musi być automatycznie uzupełniane plus podlinkowane. Poczytać o breadcrumbs. 
			// Nie rób elementów takich jak ' / ' w tekście, to można wstawić w css za pomocą :before/:after (zrobiłem to w menu)

			?>
			<div id="onImage"><span id="main-white">STRONA GŁÓWNA       /   </span> <span id="main-text"> PROJEKTY</span></div>
		</div>
		<div id="content-page" class="widthfix">

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

		?> </div>

	<?php endwhile; ?>
			
		
	</main> <!-- #content -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>