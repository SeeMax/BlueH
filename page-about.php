<?php /* Template Name: About */ get_header(); ?>
<main class="about-page">
	<?php while (have_posts()) : the_post(); ?>
		<?php $heroBackground = get_field('hero_background');?>
		<section class="hero-section background-image-section"
			style='background-image:url("<?php echo $heroBackground['url'];?>");'>
			<div class="content">
				<h1><?php the_field('hero_title');?></h1>
				<h2><?php the_field('hero_subtitle');?></h2>
      </div>
    </section>
		<section class="rethink-section">
			<div class="content">
				<h2><?php the_field('rethink_title', false, false);?></h2>
				<p><?php the_field('rethink_subtitle');?></p>
				<div class="rethink-icons">
					<?php if( have_rows('rethink_icon') ): while ( have_rows('rethink_icon') ) : the_row();?>
						<?php $iconImage = get_sub_field('rethink_icon_image');?>
						<div class="single-rethink-icon c-width-20">
							<img src="<?php echo $iconImage['url'];?>" />
							<p><?php the_sub_field('rethink_icon_words');?></p>
						</div>
					<?php endwhile; endif;?>
				</div>
			</div>
		</section>
		<section class="mission-section">
			<div class="content">
				<div class="mission-image c-width-33">
					<?php $missionImage = get_field('mission_image');?>
					<img src="<?php echo $missionImage['url'];?>" />
				</div>
				<div class="mission-words c-width-66">
					<h2><?php the_field('mission_headline');?></h2>
					<?php the_field('mission_text');?>
				</div>
			</div>
		</section>
		<?php get_template_part( 'partials/_email-footer' ); ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
