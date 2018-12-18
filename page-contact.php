<?php /* Template Name: Contact */ get_header(); ?>
<main class="contact-page">
	<?php while (have_posts()) : the_post(); ?>
		<?php $heroBackground = get_field('hero_background');?>
		<section class="hero-section background-image-section"
			style='background-image:url("<?php echo $heroBackground['url'];?>");'>
			<div class="content">
				<h1><?php the_field('hero_title');?></h1>
				<h2><?php the_field('hero_subtitle');?></h2>
      </div>
    </section>
		<section class="info-form-section">
			<div class="content">
				<div class="info-half c-width-50">
					<h2 class="main-h2"><?php the_field('information_headline', false, false);?></h2>
					<div class="contact-details">
						<span class="contact-detail-title">Call</span> <?php the_field('phone_number', 'options');?>
						<br />
						<span class="contact-detail-title">Email</span> <?php the_field('email_address', 'options');?>
					</div>
					<p class="info-notes"><?php the_field('information_notes');?></p>
					<h2><?php the_field('information_cta_title');?></h2>
					<div class="button">
						<?php $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );?>
						<a href="<?php echo $shop_page_url;?>"></a>
						Shop Now
					</div>
				</div>
				<div class="form-half c-width-50">
					<?php echo do_shortcode('[contact-form-7 id="354" title="Contact Page Form"]');?>
				</div>
			</div>
		</section>
		<?php get_template_part( 'partials/_email-footer' ); ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
