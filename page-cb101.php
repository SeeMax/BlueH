<?php /* Template Name: CB 101 */ get_header(); ?>
<main class="cbd101-page">
	<?php while (have_posts()) : the_post(); ?>
		<?php $oneOhOneHeroBackground = get_field('oneohone_background',$pageID);?>
		<section class="hero-section background-image-section"
			style='background-image:url("<?php echo $oneOhOneHeroBackground['url'];?>");'>
			<div class="content">
				<h1><?php the_field('oneohone_headline', false, false);?></h1>
				<h2 class="c-width-40"><?php the_field('oneohone_subheadline');?></h2>
			</div>
		</section>
		<section class="main-section">
			<div class="content">
				<?php
				$args = array(
					'post_type' => 'cbd',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'orderby' => 'menu_order'
				);
				$the_query = new WP_Query($args);
				?>
				<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="single-cbd101">
							<h4 class="c-width-25"><?php the_title();?></h4>
							<div class="single-101-body c-width-75">
								<?php the_content();?>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				<?php endif; ?>
			</div>
		</section>
		<section class="shop-now-section">
			<div class="content">
				<div class="shop-now-image c-width-25">
					<?php $guranteeImage = get_field('shop_now_image', $pageID);?>
					<img src="<?php echo $guranteeImage['url'];?>" />
				</div>
				<div class="shop-now-words c-width-75">
					<h2><?php the_field('shop_now_headline', $pageID, false, false);?></h2>
					<div class="button">
						<?php $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );?>
						<a href="<?php echo $shop_page_url;?>"></a>
						Buy Now
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part( 'partials/_testimonials' ); ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
