<?php /* Template Name: Shipping & Returns */ get_header(); ?>
<main class="shipping-returns-page">
	<?php while (have_posts()) : the_post(); ?>
		<?php $heroBackground = get_field('hero_background');?>
		<section class="hero-section background-image-section"
			style='background-image:url("<?php echo $heroBackground['url'];?>");'>
			<div class="content">
				<h1><?php the_field('hero_headline', false, true);?></h1>
			</div>
		</section>
		<section class="main-section">
			<div class="content">
        <?php if( have_rows('single_shipping') ): while ( have_rows('single_shipping') ) : the_row();?>
          <div class="single-shipping-return">
            <h4 class="c-width-25"><?php the_sub_field('single_shipping_question');?></h4>
            <div class="single-shipping-body c-width-75">
              <?php the_sub_field('single_shipping_answer');?>
            </div>
          </div>
    		<?php endwhile; endif;?>
			</div>
		</section>
		<section class="shop-now-section">
			<div class="content">
				<div class="shop-now-image c-width-25">
					<?php $guranteeImage = get_field('shop_now_image');?>
					<img src="<?php echo $guranteeImage['url'];?>" />
				</div>
				<div class="shop-now-words c-width-75">
					<h2><?php the_field('shop_now_headline', false, false);?></h2>
					<div class="button">
						<a href="/shop"></a>
						Shop
					</div>
				</div>
			</div>
		</section>
    <?php get_template_part( 'partials/_email-footer' ); ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
