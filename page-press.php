<?php /* Template Name: Press Page*/ get_header(); ?>
<main class="press-page">
	<?php while (have_posts()) : the_post(); ?>
		<?php $heroBackground = get_field('hero_background');?>
		<section class="hero-section background-image-section"
			style='background-image:url("<?php echo $heroBackground['url'];?>");'>
			<div class="content">

					<h1><?php the_field('hero_headline', false, false);?></h1>
					<h2><?php the_field('hero_subheadline');?></h2>
				
      </div>
    </section>
		<section class="news-section">
			<div class="content">
				<h2><?php the_field('blog_section_title', false, false);?></h2>
				<?php $args = array( 'post_type' => 'news', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="single-news-preview c-width-31">
						<div class="news-preview-words">
							<h4 class="news-date">
								<?php echo get_the_date(); ?>
							</h4>
							<h3>
								<?php the_title();?>
							</h3>
							<div class="post-excerpt">
								<?php html5wp_excerpt('html5wp_index');?>
							</div>
							<div class="button blue-button">
								<a href="<?php the_permalink();?>"></a>
								Read More
							</div>
						</div>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endwhile;?>
			</div>
		</section>
		<section class="press-logos-section">
			<div class="content">
				<?php if( have_rows('single_press_logo') ): while ( have_rows('single_press_logo') ) : the_row();?>
					<div class="single-press-logo c-width-33">
						<?php $pressLogo = get_sub_field('press_logo');?>
						<img src="<?php echo $pressLogo['url'];?>" />
					</div>
				<?php endwhile; endif;?>
			</div>
		</section>
		<?php get_template_part( 'partials/_email-footer' ); ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
