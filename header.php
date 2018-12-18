<!doctype html>
<html <?php language_attributes(); ?> class="no-js loader-class">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php the_title(); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png?v=2" rel="shortcut icon">
   <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '220868825351635');
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1"
	src="https://www.facebook.com/tr?id=220868825351635&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127785780-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-127785780-1');
	</script>

</head>
<body <?php body_class(); ?> >
<div class="wrapper">
<!-- ADD A PRE-LOADEDER
<div id="preloader">
	<img class="fug_Preloader" src="<?php // echo get_template_directory_uri();?>/img/fug_preloader.svg" >
</div> -->
	<header class="header" role="banner">
		<?php get_template_part('partials/_cart-popout');?>
		<?php if ( get_field( 'display_promo','option' ) ): ?>
			<div class="promo-container">
				<?php the_field('promo_copy','option');?>
			</div>
		<?php endif; // end of if field_name logic ?>
		<div class="content header-inner-wrap">
			<div class="mobile-menu mobileToggle">
				<span class="hamTop"></span>
				<span class="hamMid"></span>
				<span class="hamBot"></span>
			</div>
			<div class="header-logo">
				<a href="<?php echo site_url();?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bh-logo.svg" >
				</a>
			</div>
			<nav class="main-nav mainNav" role="navigation">
				<?php main_theme_nav(); ?>
				<ul class="right-menu-list">
					<li class="desktop-menu-only">
						<a class="c-block-fill" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"></a>
						<?php if (is_user_logged_in()):?>
							Account
						<?php else:?>
							Login
						<?php endif;?>
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
