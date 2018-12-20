
<?php if( have_rows('flexible_content') ): echo '<section class="additional-content">';
    while ( have_rows('flexible_content') ) : the_row(); ?>

	<?php if( get_row_layout() == 'tab_content' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
		 	
		 	
		 		<?php if( get_sub_field('section_header')): ?>
					<h2><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>

				<ul class="accordion-tabs">
				<?php if( have_rows('tab_content_row') ): 

				while ( have_rows('tab_content_row') ) : the_row(); ?>
				<li class="tab-header-and-content">
					<a href="javascript:void(0)" class="tab-link"><?php the_sub_field('tab_header'); ?></a>
					
					<div class="tab-content"><?php the_sub_field('tab_body'); ?>    </div>
								
					</li>
				
				<?php endwhile; ?>


				<?php endif; ?>
				</ul>
			<?php if( get_sub_field('divider')): ?>
					<hr>
			<?php endif; ?>
		<?php endif; ?>


	<?php elseif( get_row_layout() == 'full_width_cta' ): ?>
		
			<div class="row cta-banner bottom-baseline">
	            <span class="col-6of9">
	            <h2 class="cta-banner-header"><?php the_sub_field('section_header'); ?></h2>
	            <p class="cta-banner-body"><?php the_sub_field('section_body'); ?></p>
	            
	        </span>
	        <a href="<?php the_sub_field('url'); ?>" class="red-btn-l col-3of9 col-last cta-download" target="_blank"><?php the_sub_field('cta_button'); ?></a>
	        </div>
	        <?php if( get_sub_field('divider')): ?>
					<hr>
			
		<?php endif; ?>


 	<?php elseif( get_row_layout() == 'multiple_columns' ): ?>
	 	
	 		<?php if( get_sub_field('section_header')): ?>
				<h2><?php the_sub_field('section_header'); ?></h2>
			<?php endif; ?>
			<?php if( get_sub_field('section_subtext')): ?>
				<p><?php the_sub_field('section_subtext'); ?></p>
			<?php endif; ?>
				<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">

	         	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
					<div><?php the_sub_field('content_column'); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
				</section>
			<?php if( get_sub_field('divider')): ?>
				<hr>
			
		<?php endif; ?>

 			
 			<?php elseif( get_row_layout() == 'img_gallery_section' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			
			<?php if( get_sub_field('section_header')): ?>
				<h2><?php the_sub_field('section_header'); ?></h2>
			<?php endif; ?>
			<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">
			
			<?php 

$images = get_sub_field('img_gallery');

if( $images ): ?>


<?php foreach( $images as $image ): ?>
                
                    <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox loop-item">
	                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <h4 class="li-title"><?php echo $image['caption']; ?></h4>
                    </a>
                
            
	
	
            <?php endforeach; ?>
            
			
  
<?php endif; ?>
</section>




	        <?php if( get_sub_field('divider')): ?>
					<hr>
			<?php endif; ?>
		<?php endif; ?>
		
		

			<?php elseif( get_row_layout() == 'click_expand' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<div class="click-expand <?php if( get_sub_field('spacing')): ?>spacing-bottom<?php endif; ?>">
          <h3 class="ce-header"><?php the_sub_field('section_header'); ?></h3>
          <div class="ce-body"><?php the_sub_field('section_body'); ?></div>
      </div>
	        
		<?php endif; ?>


 	<?php elseif( get_row_layout() == 'multiple_columns' ): ?>
	 	<?php if( get_sub_field('fullwidth') == false): ?>
	 		<?php if( get_sub_field('section_header')): ?>
				<h2><?php the_sub_field('section_header'); ?></h2>
			<?php endif; ?>
			<?php if( get_sub_field('section_subtext')): ?>
				<p><?php the_sub_field('section_subtext'); ?></p>
			<?php endif; ?>
				<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">

	         	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
					<div><?php the_sub_field('content_column'); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
				</section>
			<?php if( get_sub_field('divider')): ?>
				<hr>
			<?php endif; ?>
		<?php endif; ?>
		
 			
	<?php elseif( get_row_layout() == 'table' ): ?>
	   
	        <?php if( get_sub_field('section_header')): ?>
	            <div class="headexpand-wrap">  
	            <h3 class="headexpand"><?php the_sub_field('section_header'); ?></h3>
	        <?php endif; ?>

	        <?php if( get_sub_field('table_content')): ?>
	            <div class="table-wrap">
	                <table class="tablesaw" data-mode="stack">
	                <?php the_sub_field('table_content'); ?>
	                </table>
	            </div>
	        <?php endif; ?>
	        <?php if( get_sub_field('section_header')): ?>
	           </div> <!--headexpand-wrap END -->
	        <?php endif; ?>
	        <?php if( get_sub_field('divider')): ?>
				<hr>
			
	    <?php endif; ?>


	<?php elseif( get_row_layout() == 'picture_grid' ): ?>
		
				<?php if( get_sub_field('section_header')): ?>
					<h2><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>
		<section class="<?php if (get_sub_field('number_columns') == '2') {
							echo 'rows-of-2';
						} else if (get_sub_field('number_columns') == '3') {
						        echo 'rows-of-3';
						} else if (get_sub_field('number_columns') == '4') {
						        echo 'rows-of-4';
						}
						?>">	
		<?php if( get_sub_field('lightbox')): ?>	
			<?php if( have_rows('picture_repeat') ):		
			while ( have_rows('picture_repeat') ) : the_row(); ?>
						
				<?php 	
					$image = wp_get_attachment_image_src(get_sub_field('picture'), 'thumbnail');
					$imagelarge = wp_get_attachment_image_src(get_sub_field('picture'), 'full');
				 ?>
			 
			
				<a href="<?php echo $imagelarge[0]; ?>" class="lightbox bottom-baseline">
						 <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
					<?php if( get_sub_field('sub_title')): ?>
						<figcaption><?php the_sub_field('sub_title'); ?></figcaption>
					<?php endif; ?>
				</a>
				<?php if( get_sub_field('divider')): ?>
		 				<hr>
					<?php endif; ?>
			
			
				
			<?php endwhile; ?>
			<?php endif; ?>
			
		<?php else : ?>
			<?php if( have_rows('picture_repeat') ):		
			while ( have_rows('picture_repeat') ) : the_row(); ?>
						
				<?php 	
					$image = wp_get_attachment_image_src(get_sub_field('picture'), 'thumbnail');
					$imagelarge = wp_get_attachment_image_src(get_sub_field('picture'), 'full');
				 ?>
			 
			
				<figure class="bottom-baseline">
					 <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
				<?php if( get_sub_field('sub_title')): ?>
					<figcaption><?php the_sub_field('sub_title'); ?></figcaption>
				<?php endif; ?>
			</figure>
				
			<?php if( get_sub_field('divider')): ?>
		 				<hr>
					<?php endif; ?>
			
				
			<?php endwhile; ?>
			<?php endif; ?>
			
		<?php endif; ?>
		</section>
		


	<?php elseif( get_row_layout() == 'product_grid' ): ?>
		
			<?php if( get_sub_field('section_header')): ?>
				<h2 class="carousel-header"><span><?php the_sub_field('section_header'); ?></span></h2>
			<?php endif; ?>
			<?php if( get_sub_field('section_subtext')): ?>
				<p><?php the_sub_field('section_subtext'); ?></p>
			<?php endif; ?>

			<div class="<?php if( get_sub_field('carousel')): ?>flexslider<?php endif; ?> product-carousel">
			<ul class="slides">
				<?php if( have_rows('product_row') ): while ( have_rows('product_row') ) : the_row(); ?>
				<li>
					<?php if( have_rows('product_item') ):		
					while ( have_rows('product_item') ) : the_row(); ?>
					<?php 	
					$image = wp_get_attachment_image_src(get_sub_field('product_picture'), 'medium');
					$imagelarge = wp_get_attachment_image_src(get_sub_field('product_picture'), 'full');
					?>
					<a class="product-item" href="<?php the_sub_field('product_url'); ?>"> 
							
							<span class="product-img">
							<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
							</span>
							<div class="product-header"><?php the_sub_field('product_body'); ?></div> 
					</a>
					<?php endwhile; ?>
					<?php endif; ?>
				</li>
				<?php endwhile; ?>
				<?php endif; ?>
			</ul>
			</div>

			<?php if( get_sub_field('divider')): ?>
				<hr>
		
		<?php endif; ?>



	<?php elseif( get_row_layout() == 'text_media' ): ?>
		
			<?php if( get_sub_field('section_subtext')): ?>
				<p><?php the_sub_field('section_subtext'); ?></p>
			<?php endif; ?>
			
	     	<article class="clearfix">
	    		
	    		<div class="col-3of9">
	    			<?php the_sub_field('media'); ?>
	    		</div>
	    		<div class="col-6of9 col-last">
	    		<?php if( get_sub_field('section_header')): ?>
				<h2><?php the_sub_field('section_header'); ?></h2>
			<?php endif; ?>
	    			<?php the_sub_field('text'); ?>
	    		</div>
	    		
				</article>
				<?php if( get_sub_field('divider')): ?>
					<hr>
			
		<?php endif; ?>




	<?php elseif( get_row_layout() == 'features_listing' ): ?>



	<section id="featured-listings" class="featured-listings featured-listings-dest">
  <div class="inner-wrap-fullwidth">
   <?php if(get_sub_field('fld_section_header')): ?><h2 class="featured-listings__header section__header"><?php the_sub_field('fld_section_header'); ?></h2><?php endif; ?>
    


    <div>
<?php if( have_rows('fld_featured_listing') ): 

        while ( have_rows('fld_featured_listing') ) : the_row(); ?>
       
       <a href="<?php the_sub_field('fld_link'); ?>" class="fl-item">
  <figure>
    <?php 

$featured_image = get_sub_field('fld_featured_image');

if( !empty($featured_image) ): ?>

  <img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />

<?php endif; ?>
  </figure>
      <?php if(get_sub_field('fld_featured_title')): ?><h2 class="fl-header"><?php the_sub_field('fld_featured_title'); ?></h2><?php endif; ?>
      <?php if(get_sub_field('fld_content')): ?><p class="fl-subheader"><?php the_sub_field('fld_content'); ?></p><?php endif; ?>
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


</div>
	
	<?php if(get_sub_field('fld_all_listing_cta_url')): ?>
    <div class="section__cta">
      <a href="<?php the_field('fld_all_listing_cta_url'); ?>" class="btn-alt"><?php the_field('fld_all_listing_cta'); ?></a>
    </div>
       <?php endif; ?>

  </div>
 
</section>




	<?php elseif( get_row_layout() == 'our_listing' ): ?>



	<section id="featured-listings" class="featured-listings our-listings-dest">
  <div class="inner-wrap-fullwidth">
   <?php if(get_sub_field('ol_section_header')): ?><h2 class="featured-listings__header section__header"><?php the_sub_field('ol_section_header'); ?></h2><?php endif; ?>
    


    <div>
<?php if( have_rows('ol_featured_listing') ): 

        while ( have_rows('ol_featured_listing') ) : the_row(); ?>
       
       <a href="<?php the_sub_field('ol_link'); ?>" class="fl-item">
		<figure>
		<?php 

		$featured_image = get_sub_field('ol_featured_image');

		if( !empty($featured_image) ): ?>

		<img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />

		<?php endif; ?>
		</figure>
      <?php if(get_sub_field('ol_featured_title')): ?><h2 class="fl-header"><?php the_sub_field('ol_featured_title'); ?></h2><?php endif; ?>
    </a>

        
        <?php endwhile; ?>


        <?php endif; ?>


</div>
	
	<?php if(get_sub_field('ol_all_listing_cta_url')): ?>
    <div class="section__cta">
      <a href="<?php the_field('ol_all_listing_cta_url'); ?>" class="btn-alt"><?php the_field('ol_all_listing_cta'); ?></a>
    </div>
       <?php endif; ?>

  </div>
 
</section>




	<?php elseif( get_row_layout() == 'property_listing' ): ?>



	<section id="featured-listings" class="featured-listings property-listings-dest">
  <div class="inner-wrap-fullwidth">
   <?php if(get_sub_field('pl_section_header')): ?><h2 class="featured-listings__header section__header"><?php the_sub_field('pl_section_header'); ?></h2><?php endif; ?>
    


    <div>
		<?php if( have_rows('pl_featured_listing') ): 

        while ( have_rows('pl_featured_listing') ) : the_row(); ?>
       <div class="pl-item">
       		<div class="pl-item-wrap">
				<?php if(get_sub_field('pl_link')): ?>
				<a href="<?php the_sub_field('pl_link'); ?>">
				<?php endif; ?>

				<figure>
				<?php 

				$featured_image = get_sub_field('pl_featured_image');

				if( !empty($featured_image) ): ?>

				<img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />

				<?php endif; ?>
				</figure>
				<?php if(get_sub_field('pl_featured_title')): ?><h2 class="pl-header"><?php the_sub_field('pl_featured_title'); ?></h2><?php endif; ?>
			</div>
			<?php if(get_sub_field('pl_featured_content')): ?><p class="pl-content"><?php the_sub_field('pl_featured_content'); ?></p><?php endif; ?>

			<?php if(get_sub_field('pl_link')): ?>
			</a>
			<?php endif; ?>

        </div>
        <?php endwhile; ?>


        <?php endif; ?>


</div>
	
	<?php if(get_sub_field('pl_all_listing_cta_url')): ?>
    <div class="section__cta">
      <a href="<?php the_field('pl_all_listing_cta_url'); ?>" class="btn-alt"><?php the_field('pl_all_listing_cta'); ?></a>
    </div>
       <?php endif; ?>

  </div>
 
</section>




	<?php elseif( get_row_layout() == 'team_content' ): ?>



	<section id="featured-listings" class="featured-listings team-content-dest">
  <div class="inner-wrap-fullwidth">
   <?php if(get_sub_field('tc_section_header')): ?><h2 class="featured-listings__header section__header"><?php the_sub_field('tc_section_header'); ?></h2><?php endif; ?>
    


    <div>
		<?php if( have_rows('tc_featured_listing') ): 

        while ( have_rows('tc_featured_listing') ) : the_row(); ?>
       <div class="tc-item">
       		<div class="tc-item-wrap">

				<figure>
				<?php 

				$featured_image = get_sub_field('tc_featured_image');

				if( !empty($featured_image) ): ?>

				<img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />

				<?php endif; ?>
				</figure>
				<?php if(get_sub_field('tc_featured_title')): ?><h2 class="tc-header"><?php the_sub_field('tc_featured_title'); ?></h2><?php endif; ?>
			</div>
			<?php if(get_sub_field('tc_featured_content')): ?><p class="tc-content"><?php the_sub_field('tc_featured_content'); ?></p><?php endif; ?>
			
				<?php if(get_sub_field('tc_link')): ?>
				<a href="<?php the_sub_field('tc_link'); ?>" class="btn"><?php the_sub_field('tc_link_text'); ?></a>
				<?php endif; ?>

        </div>
        <?php endwhile; ?>


        <?php endif; ?>


</div>
	
	<?php if(get_sub_field('tc_all_listing_cta_url')): ?>
    <div class="section__cta">
      <a href="<?php the_field('tc_all_listing_cta_url'); ?>" class="btn-alt"><?php the_field('tc_all_listing_cta'); ?></a>
    </div>
       <?php endif; ?>

  </div>
 
</section>







	<?php elseif( get_row_layout() == 'image_thumb_carousel' ): ?>

<?php 

$images = get_sub_field('itc_gallery');

if( $images ): ?>
<div class="aligncenter">
<h3 class="text-aligncenter"><?php the_sub_field('itc_section_header'); ?></h3>
<div class="commercial-slider">

<!-- Place somewhere in the <body> of your page -->
<div id="slider" class="flexslider">
<ul class="slides">

	<?php foreach( $images as $image ): ?>
 	<li><a class="lightbox contact-img" href="<?php echo $image['url']; ?>"><img class="size-thumbnail aligncenter" src="<?php echo $image['url']; ?>" alt="" /></a></li>
 	<?php endforeach; ?>

</ul>
</div>
<div id="carousel" class="flexslider">
<ul class="slides">

	<?php foreach( $images as $image ): ?>
 	<li><img class="size-thumbnail aligncenter" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
 	<?php endforeach; ?>

</ul>
</div>
</div>
</div>

<?php endif; ?>
	



<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>




