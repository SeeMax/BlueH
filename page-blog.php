<?php /* Template Name: Blog Page*/ get_header(); ?>
<main class="blog-page">
	<?php while (have_posts()) : the_post(); ?>
		<?php $heroBackground = get_field('hero_background');?>
		<section class="hero-section background-image-section"
			style='background-image:url("<?php echo $heroBackground['url'];?>");'>
			<div class="content">
				<h1><?php the_field('hero_title', false, false);?></h1>
				<h2><?php the_field('hero_subtitle');?></h2>
      </div>
    </section>
		<section class="blog-filter-buttons">
			<div class="content">
				<h2>Filter</h2>
				<div class="blogFilterButton button active-cat-button" data-filter='*'>All</div>
				<?php $categories = get_categories();?>
				<?php foreach  ($categories as $category) {
					$thisCat = $category->cat_name;
					$thisCat = strtolower($thisCat);
				  echo '<div class="blogFilterButton button" data-filter=".filter-'. $thisCat .'">'. $thisCat .'</div>';
				};?>
			</div>
		</section>
		<section class="blog-section blogGrid">
			<div class="content">
				<h2><?php the_field('blog_section_title', false, false);?></h2>
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>
				<?php $args = array( 'post_type' => 'post', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="single-blog-preview c-width-30 <?php $categories = get_the_category();

					if ( ! empty( $categories ) ) {
					foreach( $categories as $category ) {
						$separator = '-';
						$thisCat = $category->cat_name;
						$thisCat = strtolower($thisCat);
						$thisCat = trim($thisCat);
						echo $output  = 'filter-'. $thisCat .' ';

					}
					};?>">

						<?php $thumb = get_the_post_thumbnail(get_the_ID());?>
						<?php echo the_post_thumbnail('medium', ['class' => 'post-image', 'title' => 'Feature image']);?>
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
