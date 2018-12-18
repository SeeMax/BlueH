<?php
/* The template for displaying Search Results pages. */
get_header(); ?>
<main class="search-result-page">
		<section class="main-section">
			<div class="content">

        <?php if ( have_posts() ) : ?>
          <h3>
            Search Results for: <span><?php the_search_query();?></span>
          </h3>

          <?php while ( have_posts() ) : the_post(); ?>
            <div class="single-search-result">
              <a class="c-block-fill" href="<?php echo get_permalink(); ?>">
              </a>
              <?php the_post_thumbnail('medium') ?>
              <div class="single-result-words">
                <h4><?php the_title(); ?></h4>
                <div class="single-result-excerpt">
									<?php $thisID = get_the_ID();?>
									<?php if(get_field('main_description', $thisID)):?>
										<?php the_field('main_description', $thisID);?>
									<?php else:?>
                  	<?php echo substr(get_the_excerpt(), 0,100); ?>
									<?php endif;?>
                </div>
                <div class="button">
                  <a class="c-block-fill" href="<?php the_permalink(); ?>"></a>
                  Visit
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <h2>
            Sorry. Your search yielded no results.
          </h2>
        <?php endif; ?>
			</div>
		</section>
</main>
<?php get_footer(); ?>
