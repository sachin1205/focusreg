<section id="featured-listings" class="featured-listings">
  <div class="inner-wrap-fullwidth">
   <?php if(get_field('fl_section_header')): ?><h2 class="featured-listings__header section__header"><?php the_field('fl_section_header'); ?></h2><?php endif; ?>
    


    <div class="fl-slider">
      <ul class="slides">

        <?php if( have_rows('featured_listing') ): 
        while ( have_rows('featured_listing') ) : the_row(); ?>
       <li class="rows-of-3">

          <?php if( have_rows('fl_add_row') ): 
          while ( have_rows('fl_add_row') ) : the_row(); ?>

              <a href="<?php the_sub_field('fl_link'); ?>" class="fl-item">
              <figure>
              <?php 

              $featured_image = get_sub_field('fl_featured_image');

              if( !empty($featured_image) ): ?>

              <img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />

              <?php endif; ?>
              </figure>
              <?php if(get_sub_field('fl_featured_title')): ?><h2 class="fl-header"><?php the_sub_field('fl_featured_title'); ?></h2><?php endif; ?>
              <?php if(get_sub_field('fl_subtext')): ?><p class="fl-subheader"><?php the_sub_field('fl_subtext'); ?></p><?php endif; ?>
              <div class="fl-body">

              </div>
              <svg class="fl-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="32px" height="32px" viewBox="464 264 32 32" enable-background="new 464 264 32 32" xml:space="preserve">
              <path fill="#000000" d="M482.3,291.4v4.6h-4.6v-4.6H482.3z M473.1,286.9v4.6h4.6v-4.6H473.1z M468.6,282.3v4.6h4.6v-4.6H468.6z
              M464,277.7v4.6h4.6v-4.6H464z M482.3,286.9v4.6h4.6v-4.6H482.3z M486.9,282.3v4.6h4.6v-4.6H486.9z M491.4,277.7v4.6h4.6v-4.6H491.4
              z M477.7,277.7v4.6h4.6v-4.6H477.7z M473.1,273.1v4.6h4.6v-4.6H473.1z M468.6,268.6v4.6h4.6v-4.6H468.6z M464,264v4.6h4.6V264H464z
              M482.3,273.1v4.6h4.6v-4.6H482.3z M486.9,268.6v4.6h4.6v-4.6H486.9z M491.4,264v4.6h4.6V264H491.4z"></path>
              </svg>
              </a>


          <?php endwhile; ?>
          <?php endif; ?>

        </li>
        <?php endwhile; ?>
        <?php endif; ?>
    </ul>








</div>

    <div class="section__cta">
      <a href="<?php the_field('fl_all_listing_cta_url'); ?>" class="btn-alt"><?php the_field('fl_all_listing_cta'); ?></a>
    </div>

  </div>
 
</section>