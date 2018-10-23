<section class="hero-section hero-slider-section">
  <div class="content">
    <?php if( have_rows('hero_slide', 'options') ): while ( have_rows('hero_slide', 'options') ) : the_row();?>
      <?php $imageL = get_sub_field('hero_slide_image_left', 'options');?>
      <?php $imageC = get_sub_field('hero_slide_image_center', 'options');?>
      <?php $imageR = get_sub_field('hero_slide_image_right', 'options');?>
      <div class="hero-slider-single-slide">
        <div class="image-left">
          <img src='<?php echo $imageL['url'];?>'>
        </div>
        <div class="image-right">
          <img src='<?php echo $imageR['url'];?>'>
        </div>
        <div class="image-center">
          <img src='<?php echo $imageC['url'];?>'>
        </div>
        <div class="hero-slider-text">
          <h1><?php the_sub_field('hero_slide_headline', 'options');?></h1>
          <div class="button">
            <a href="<?php the_sub_field('hero_slide_button_destination', 'options');?>"></a>
            <?php the_sub_field('hero_slide_button_text', 'options');?>
          </div>
        </div>
      </div>
    <?php endwhile; endif;?>
  </div>
</section>
