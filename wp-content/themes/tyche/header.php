<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tyche
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body 
	  <?php body_class(); ?>>
	 <?php wp_body_open(); ?>
<div id="page" class="site">
	<?php
	/**
	 * Enable / Disable the top bar
	 */
	if ( get_theme_mod( 'tyche_enable_top_bar', true ) ) :
		get_template_part( 'template-parts/top-header' );
	endif;
	?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding container">
			<div class="row">
				<div class="col-sm-4 header-logo">
					<?php
					if ( has_custom_logo() ) :
						the_custom_logo();
					else :
						?>
						<div class="site-title-description">
							<?php
							$header_textcolor = get_theme_mod( 'header_textcolor' );
							if ( 'blank' !== $header_textcolor ) :
								?>
								<a class="site-title" href="<?php echo esc_url( get_home_url() ); ?>">
									<?php Tyche_Helper::customize_partial_blogname(); ?>
								</a>
								<?php
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) :
									?>
									<p class="site-description"> <?php Tyche_Helper::customize_partial_blogdescription(); ?> </p>
								<?php endif; ?>

							<?php endif; ?>
						</div>
						<?php
					endif;
					?>
				</div>

				<?php if ( get_theme_mod( 'tyche_show_banner', false ) ) : ?>
					<div class="col-sm-8 header-banner">
						<?php
						$banner = get_theme_mod( 'tyche_banner_type', 'image' );
						get_template_part( 'template-parts/banner/banner', $banner );
						?>
					</div>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						wp_nav_menu(
							array(
								'menu'           => 'primary',
								'theme_location' => 'primary',
								'depth'          => 10,
								'container'      => '',
								'menu_id'        => 'desktop-menu',
								'menu_class'     => 'sf-menu',
								'fallback_cb'    => 'Tyche_Navwalker::fallback',
								'walker'         => new Tyche_Navwalker(),
							)
						);
						?>
						<!-- /// Mobile Menu Trigger //////// -->
						<button href="#" id="mobile-menu-trigger"> <i class="fa fa-bars"></i> </button>
						<!-- end #mobile-menu-trigger -->
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<!-- Top Header Bar -->
<header class="top-header-bar-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="top-header-bar">
					<!-- Email -->
					<li class="top-email">
						<i class="fa fa-envelope-o"></i> <?php echo esc_html( get_theme_mod( 'tyche_top_bar_email', get_option( 'admin_email' ) ) ); ?>
					</li>
					<!-- / Email -->
					<?php if ( class_exists( 'WooCommerce' ) ) : ?>
						<!-- Cart -->
						<li class="top-cart">
							<a href="<?php echo esc_url( Tyche_Helper::get_woocommerge_page( 'cart' ) ); ?>"><i class="fa fa-cart-plus fa-3x"></i>
							</a>
						</li> <!-- / Cart -->
					<?php endif; ?>

					<?php if ( class_exists( 'WooCommerce' ) ) : ?>
						<!-- Account -->
						<li class="top-account">
							<a href="<?php echo esc_url( Tyche_Helper::get_woocommerge_page( 'account' ) ); ?>"><i class="fa fa-user"></i> <?php echo esc_html__( 'Account', 'tyche' ); ?>
							</a>
						</li><!-- / Account -->
					<?php endif; ?>					
					<?php
					$enable_search_bar = get_theme_mod( 'tyche_enable_top_bar_search', 'enabled' );
					?>
					<?php if ( 'enabled' === $enable_search_bar ) : ?>
						<!-- Top Search -->
						<li class="top-search">
							<!-- Search Form -->
							<form role="search" method="get" class="pull-right" id="searchform_topbar" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<label>
									<span class="screen-reader-text"><?php esc_html__( 'Search for:', 'tyche' ); ?></span>
									<input class="search-field-top-bar" id="search-field-top-bar" placeholder="<?php echo esc_attr__( 'Tìm Kiếm ...', 'tyche' ); ?>" value="" name="s" type="search">
								</label>
								<button id="search-top-bar-submit" type="submit" class="search-top-bar-submit">
									<i class="fa fa-search fa-xs"></i>
								</button>
							</form>
						</li><!-- / Top Search -->
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</header><!-- /Top Header Bar -->
	<?php
	/**
	 * Enable / Disable the main slider
	 */
	$show_on_front = get_option( 'show_on_front' );
	if ( get_theme_mod( 'tyche_enable_main_slider', true ) && is_front_page() && 'posts' !== $show_on_front ) :
		get_template_part( 'template-parts/main-slider' );
	endif;
	?>

	<div class="site-content">
