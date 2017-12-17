<?php get_header(); ?>
	<main id="content" class="content">

		<div id="imageContainer">

			<img class="alignnone size-full wp-image-53" src="http://digitalzone.pl/projekty/nreit/wp-content/uploads/2017/12/obrazek.jpg" alt="" width="1920" height="310" />

			<div id="title-text">
				<span id="title">02</span><span id="title-dot" style="margin-right: 2%;">.</span><span id="title" style="margin-right: 8%;">Projekty</span>
			</div> 

			<div id="onImage"><span id="main-white">STRONA GŁÓWNA       /   </span> <span id="main-text"> PROJEKTY</span></div>
		</div>
		<div id="content-page" class="widthfix">

			<?php while (have_posts()) : the_post(); 

					get_template_part( 'content',  get_post_format() );		

					if ( comments_open() || get_comments_number() ) {
						do_action( 'basic_before_post_comments_area' );
						comments_template();
						do_action( 'basic_after_post_comments_area' );
					}

			endwhile; ?>
			
		</div>
			


	</main> <!-- #content -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>