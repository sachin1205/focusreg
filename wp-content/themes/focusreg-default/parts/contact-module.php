<section class="contact-module" <?php if(get_field('cm_background_image')): $cm_bg = get_field('cm_background_image');
 ?> style="background-image: url('<?php echo $cm_bg["url"]; ?>');" <?php endif; ?>>
  <div class="inner-wrap">
    <h2 class="section-header"><?php the_field('cm_section_header'); ?></h2>
            <h2 class="section-subtext"><?php the_field('cm_section_subtext'); ?></h2>
    <p><a href="<?php the_field('cm_cta_url'); ?>" class="btn-alt"><?php the_field('cm_section_cta_text'); ?></a></p>
  </div>
</section>