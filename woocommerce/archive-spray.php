<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;
get_header();?>
<main class="custom-shop-page">

		<?php $pageID = 9;?>
		<?php $shopHeroBackground = get_field('shop_hero_background',$pageID);?>

		<section class="headline-section">
			<div class="content">
				<h1><?php the_field('spray_headline','options');?></h1>
				<h2><?php the_field('spray_subheadline','options');?></h2>
				<p><?php the_field('spray_body_copy','options');?></p>
			</div>
		</section>

		<section class="products-section">

			<?php
			if ( woocommerce_product_loop() ) {
				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );

						wc_get_template_part( 'content', 'product' );
					}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			};?>
		</section>
		<section class="gurantee-section">
			<div class="content">
				<div class="gurantee-image c-width-33-3">
					<?php $guranteeImage = get_field('guarantee_image', $pageID);?>
					<img src="<?php echo $guranteeImage['url'];?>" />
				</div>
				<div class="gurantee-words c-width-66-6">
					<h2><?php the_field('guarantee_headline', $pageID, false, false);?></h2>
					<h4><?php the_field('guarantee_subheadline', $pageID);?></h4>
				</div>
			</div>
		</section>
		<?php get_template_part( 'partials/_email-footer' ); ?>
</main>
<?php get_footer();
