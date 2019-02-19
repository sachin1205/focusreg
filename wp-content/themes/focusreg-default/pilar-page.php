<?php
/*
		Template Name: Pilar Page
	*/
?>
 
    
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
   <?php //Starkers_Utilities::get_template_parts( array( 'parts/page-intro' ) ); ?>    
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<!--Site Content-->
	<section class="site-content" role="main">
	    <div class="anchor-links-nav">
  <ul>
    <?php if( have_rows('anchor_link_item') ): $i = 1; while ( have_rows('anchor_link_item') ) : the_row(); ?>
    <li class="<?php if($i == 1) : ?>active<?php endif; ?>">
      <a href="#tab-<?php echo $i; ?>" class="smooth-scroll"><?php the_sub_field('anchor_link_text'); ?></a></li>
    <?php $i++; endwhile;
      endif; ?>
  </ul>
</div>
			<div class="inner-wrap">
	        <article class="sc-primary">
				
				<?php the_content(); ?>
	        	<!-- If you're looking for the page title, it can be found in parts/shared/header -->
				<?php if( have_rows('anchor_link_item') ): ?>
    <?php if( have_rows('anchor_link_item') ): $i = 1; while ( have_rows('anchor_link_item') ) : the_row(); ?>
	<div id="tab-<?php echo $i; ?>" class="jump-anchor">
	<h2><?php the_sub_field('anchor_link_text'); ?></h2>
     <?php the_sub_field('descreption_text'); ?>
	 </div>
    <?php $i++; endwhile;
      endif; ?>
	  
<?php endif; ?> 
	       		
						<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>
					  
	        </article>
	      <?php //Starkers_Utilities::get_template_parts( array( 'parts/shared/secondary-nav' ) ); ?>
				<?php //Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar' ) ); ?>
			
			</div>
				<?php Starkers_Utilities::get_template_parts( array( 'parts/resource-module' ) ); ?>
	</section>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>