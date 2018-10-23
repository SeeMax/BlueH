<?php if (get_field('testimonial_background')):?>
<?php $background = get_field('testimonial_background');?>
<section class="testimonials-section background-image-section"
  style='background-image:url("<?php echo $background['url'];?>");'>
<?php else:?>
  <section class="testimonials-section">
<?php endif; ?>
  <div class="content">
    <h2 class="c-width-33"><?php the_field('testimonial_headline', false, false);?></h2>
    <div class="c-width-50 testimonial-slider-container">
      <?php
      $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'menu_order'
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="single-testimonial">
            <?php the_content();?>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      <?php endif; ?>

    </div>
    <div class="testimonial-arrow nextArrow"></div>
  </div>
</section>
