<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php remove_filter('the_content', 'wpautop'); ?>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge" /><![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	
	
  <script src="<?php echo get_template_directory_uri()?>/ism/js/ism-2.2.min.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/ism/css/my-slider.css"/>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"?></script>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="wrapper cleafix">

	<?php do_action( 'basic_before_header' ); ?>
	<!-- BEGIN header -->
	<header id="header" class="<?php echo apply_filters( 'basic_header_class', 'clearfix' ); ?> widthfix">

		<?php do_action( 'basic_before_sitetitle' ); ?>
	

		
                 

				<?php do_action( 'basic_after_sitelogo' ); ?>

				<?php $description = basic_get_theme_option( 'showsitedesc' );
				$show_description  = ( false === $description || ! empty( $description ) || is_customize_preview() );
				if ( $show_description ) { ?>
					<p class="sitedescription"><?php bloginfo( 'description' ); ?></p>
				<?php }
				do_action( 'basic_after_sitedescription' ); ?>

			<?php do_action( 'basic_after_sitetitle' ); ?>

	

		<?php do_action( 'basic_before_topnav' ); ?>
		<div class="maxwidth <?php echo apply_filters( 'basic_header_topnav_class', 'topnav grid' ); ?>">
				<?php do_action( 'basic_before_sitelogo' );
				if ( is_home() ) { ?>
                  
                <?php } else { ?>
                 
                <?php }
  echo '<a href="'.site_url().'">';
                    do_action( 'basic_before_blogname_in_logo' );
				
					bloginfo( 'name' );
					echo '</a>';
					do_action( 'basic_after_blogname_in_logo' );

              ?>

			<div id="mobile-menu" class="mm-active"><?php _e( 'Menu', 'basic' ); ?></div>
			<nav>
				<?php if ( has_nav_menu( 'top' ) ) :
					wp_nav_menu( array(
						'theme_location' => 'top',
						'menu_id'        => 'navpages',
						'container'      => false,
						 'link_after' => ' ',
						'items_wrap'     => '<ol class="top-menu clearfix">%3$s</ol>'
					) );
				else : ?>
				
				

				
				
				
				
					<ul class="top-menu clearfix">
						<?php if ( is_front_page() ) { ?>
							<li class="page_item current_page_item"><span><?php _e( 'Home', 'basic' ); ?> </span>
						
							</li>
						<?php } else { ?>
							<li class="page_item">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'basic' );?> </a>
							
							</li>
						<?php }
						wp_list_pages( 'title_li=&depth=2' ); ?>
					</ul>
				
				<?php endif; ?>
			</nav>

		</div>
		<?php do_action( 'basic_after_topnav' ); ?>

	</header>
	<!-- END header -->

	<?php do_action( 'basic_after_header' ); ?>


	<div id="main" class="maxwidth clearfix">

		<!-- BEGIN content -->
	
