<?php /* Template Name: Coming Soon */ get_header(); ?>
<main class="coming-soon-page">
  <?php while (have_posts()) : the_post(); ?>
  <section>
    <div class="content">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" >
      <h1><?php the_title();?></h1>
      <p><?php the_content();?></p>
    </div>
  </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
