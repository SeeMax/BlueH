<?php /* Template Name: Default Post */ get_header(); ?>
<main class="default-post">
	<?php while (have_posts()) : the_post(); ?>
		<section class="main-section">
			<div class="content">
				<?php the_date(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<?php get_template_part( 'partials/_email-footer' ); ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
