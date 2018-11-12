<?php /* Template Name: Home */ get_header(); ?>
<main class="home-page">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'partials/_hero-slider' ); ?>
		<section class="tile-section">
			<div class="content">
				<h2><?php the_field('tile_section_title', false, false);?></h2>
				<h3><?php the_field('tile_section_subtitle');?></h3>
				<?php if( have_rows('single_tile') ): while ( have_rows('single_tile') ) : the_row();?>
					<?php $image = get_sub_field('single_tile_image');?>
					<div class="tile-section-single-tile c-width-24">
						<img src='<?php echo $image['url'];?>'>
						<h3 class="hidden-title">
							<?php the_sub_field('single_tile_title');?>
						</h3>
						<div class="single-tile-info">
							<h3><?php the_sub_field('single_tile_title');?></h3>
							<p>
								<?php the_sub_field('single_tile_body');?>
							</p>
							<div class="button">
									<a href="<?php the_sub_field('single_tile_button_destination');?>"></a>
									<?php the_sub_field('single_tile_button_text');?>
							</div>
						</div>
					</div>
    		<?php endwhile; endif;?>
					<div class="button">
						<a href="/shop"></a>
						<?php the_field('tile_section_button_text');?>
					</div>
			</div>
		</section>
		<section class="facts-section">
			<div class="content">
				<?php $factsImage = get_field('facts_section_image');?>
				<div class="fact-section-copy c-width-38">
					<div class="fact-section-single">
						<h2><?php the_field('facts_section_title_1', false, false);?></h2>
						<p>
							<?php the_field('facts_section_body_1');?>
						</p>
						<div class="button">
							<a href="<?php the_field('facts_section_button_destination_1');?>"></a>
							<?php the_field('facts_section_button_text_1');?>
						</div>
					</div>
					<div class="fact-section-single">
						<h2><?php the_field('facts_section_title_2', false, false);?></h2>
						<p>
							<?php the_field('facts_section_body_2');?>
						</p>
						<div class="button">
							<a href="<?php the_field('facts_section_button_destination_2');?>"></a>
							<?php the_field('facts_section_button_text_2');?>
						</div>
					</div>
				</div>
				<div class="fact-section-image c-width-62">
					<img src='<?php echo $factsImage['url'];?>'>
				</div>
			</div>
		</section>
		<?php $Callbackground = get_field('callout_section_background');?>
		<section class="callout-section background-image-section"
			style='background-image:url("<?php echo $Callbackground['url'];?>");'>
			<div class="content">
				<h2><?php the_field('callout_section_title', false, false);?></h2>
				<h4><?php the_field('callout_section_subtitle');?></h4>
			</div>
		</section>
		<section class="shop-section">
			<div class="content">

				<div class="shop-section-image c-width-50">
					<?php $shopImage = get_field('shop_section_image');?>
					<img src="<?php echo $shopImage['url'];?>">
				</div>
				<div class="shop-section-words c-width-50">
					<h2><?php the_field('shop_section_title', false, false);?></h2>
					<p><?php the_field('shop_section_body');?></p>
					<div class="button">
						<a href="<?php the_field('shop_section_button_destination');?>"></a>
						<?php the_field('shop_section_button_text');?>
					</div>
				</div>
			</div>
		</section>
		<section class="blog-section">
			<div class="content">
				<h2><?php the_field('blog_section_title', false, false);?></h2>
				<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="single-blog-preview c-width-31">
						<?php $thumb = get_the_post_thumbnail(get_the_ID());?>
						<?php echo the_post_thumbnail('large', ['class' => 'post-image', 'title' => 'Feature image']);?>
						<div class="blog-preview-words">
							<h4>
								<?php the_title();?>
							</h4>
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
		<?php get_template_part( 'partials/_email-footer' ); ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
