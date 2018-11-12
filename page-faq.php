<?php /* Template Name: FAQ */ get_header(); ?>
<main class="faq-page">
	<?php while (have_posts()) : the_post(); ?>
		<?php $heroBackground = get_field('hero_background');?>
		<section class="hero-section background-image-section"
			style='background-image:url("<?php echo $heroBackground['url'];?>");'>
			<div class="content">
				<h1><?php the_field('hero_headline', false, false);?></h1>
			</div>
		</section>
		<?php if( have_rows('faq_section') ): while ( have_rows('faq_section') ) : the_row();?>
			<section class="faq-section">
				<div class="content">
					<div class="faq-section-title c-width-25">
						<h4><?php  the_sub_field('faq_section_title');?></h4>
					</div>
					<div class="faq-section-single-qa c-width-75">
						<?php if( have_rows('faq_section_questionsanswer') ): while ( have_rows('faq_section_questionsanswer') ) : the_row();?>
							<div class="question-answer">
								<div class="question-answer-single-q">
									<span class="faq-toggle faqToggle">+</span><?php  the_sub_field('faq_section_one_question');?>
								</div>
								<div class="question-answer-single-a">
									<div class="single-a-inner">
										<?php  the_sub_field('faq_section_one_answer');?>
									</div>
								</div>
							</div>
						<?php endwhile; endif;?>
					</div>
				</div>
			</section>
		<?php endwhile; endif;?>
		<section class="shop-now-section">
			<div class="content">
				<div class="shop-now-image c-width-30">
					<?php $guranteeImage = get_field('shop_now_image');?>
					<img src="<?php echo $guranteeImage['url'];?>" />
				</div>
				<div class="shop-now-words c-width-70">
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
