<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('content custom-single-product'); ?>>
	<div class="single-product-left-side c-width-50">
		<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
		?>
		<ul class="bullet-points">

			<?php if( have_rows('bullet_points') ):
			  while ( have_rows('bullet_points') ) : the_row();?>
				<?php $bulletImage = get_sub_field('single_bullet_image');?>
			  	<li>
						<img src="<?php echo $bulletImage['url']; ?>">
						<span><?php the_sub_field('single_bullet_text');?></span>
					</li>
			<?php endwhile;
			endif;?>
		</ul>
	</div>
	<div class="single-product-right-side c-width-50">
		<div class="summary entry-summary">
			<?php 	$current_tags = get_the_terms( get_the_ID(), 'product_tag' );
			//only start if we have some tags
			if ( $current_tags && ! is_wp_error( $current_tags ) ) {;?>

					<div class="prod-tags">
				    <?php foreach ($current_tags as $tag) {
				        $tag_title = $tag->name;
				        echo $tag_title;
				    };?>
					</div>
			<?php };?>
			<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 50
				 * @hooked woocommerce_template_single_add_to_cart - 40
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
		<div class="single-product-main-description">
			<?php the_field('main_description');?>
		</div>
		<div class="product-toggle-buttons">
			<div class="single-product-active single-product-toggle-button product-description">
				Product Description
			</div>
			<div class="single-product-toggle-button suggested-uses">
				Suggested Use
			</div>
			<div class="single-product-toggle-button ingredients">
				Ingredients and Test Results
			</div>
		</div>
		<div class="product-toggle-container">
			<div class="single-product-toggle c-block-fill product-description single-product-active">
				<?php the_field('product_description');?>
			</div>
			<div class="single-product-toggle c-block-fill suggested-uses">
				<?php the_field('suggested_uses');?>
			</div>
			<div class="single-product-toggle c-block-fill ingredients">
				 <?php the_field('ingredients', false, false);?>
			</div>
		</div>
	</div>

	<?php do_action( 'woocommerce_after_single_product' ); ?>
</div>
