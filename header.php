<!doctype html>
<html <?php language_attributes(); ?> class="no-js loader-class">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php the_title(); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">
   <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>


</head>
<body <?php body_class(); ?> >
<div class="wrapper">
<!-- ADD A PRE-LOADEDER
<div id="preloader">
	<img class="fug_Preloader" src="<?php // echo get_template_directory_uri();?>/img/fug_preloader.svg" >
</div> -->
	<header class="header" role="banner">
		<?php get_template_part('partials/_cart-popout');?>
		<div class="content header-inner-wrap">
			<div class="mobile-menu mobileToggle">
				<span class="hamTop"></span>
				<span class="hamMid"></span>
				<span class="hamBot"></span>
			</div>
			<div class="header-logo">
				<a href="<?php echo site_url();?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/temp-logo.svg" >
				</a>
			</div>
			<nav class="main-nav mainNav" role="navigation">
				<?php main_theme_nav(); ?>
				<ul class="right-menu-list">
					<li class="desktop-menu-only">
						<a class="c-block-fill" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"></a>
						Login
					</li>
					<li class="cart-trigger cartTrigger ">
						<?php global $woocommerce; ?>
						<span class="desktop-menu-only">Cart</span>
						<span class="mobile-menu-only mobile-cart-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/img/cart-icon.svg" >
						</span>
						<span class="header-cart-count cart-customlocation">
							<?php echo sprintf ( _n( '%d', '%d',
							WC()->cart->get_cart_contents_count() ),
							WC()->cart->get_cart_contents_count() ); ?>
						</span>
					</li>
					<li class="search-icon">
						<i class="searchIcon fas fa-search" aria-hidden="true"></i>
					</li>
				</ul>
			</nav>
		</div>
		<?php get_search_form();?>
	</header>
