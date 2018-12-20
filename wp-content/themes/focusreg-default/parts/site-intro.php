<section class="site-intro">
  <div class="inner-wrap">
    <figure class="si-logo">
    	<?php 

$image = get_field('si_logo');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?></figure>
    <?php if(get_field('si_heading')):?>
    <h1 class="si-h1"><?php the_field('si_heading');?></h1>
    <?php else: ?>
  <h1 class="si-h1"><?php the_title(); ?></h1>
<?php endif;?>

<?php if(get_field('si_text')):?>
<p class="si-subtext">
  <?php the_field('si_text');?>
</p>
<?php endif;?>

    <br><br>
    <?php if( have_rows('si_buttons') ): 

				while ( have_rows('si_buttons') ) : the_row(); ?>
				<a href="<?php the_sub_field('si_button_url'); ?>" class="btn-alt"><?php the_sub_field('si_button_text'); ?> </a>
				
				<?php endwhile; ?>


				<?php endif; ?>

  

    <a href="#featured-listings" class="si-scroll smooth-scroll">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="32px" height="32px" viewBox="464 264 32 32" enable-background="new 464 264 32 32" xml:space="preserve">
        <path fill="#FFFFFF" d="M482.3,291.4v4.6h-4.6v-4.6H482.3z M473.1,286.9v4.6h4.6v-4.6H473.1z M468.6,282.3v4.6h4.6v-4.6H468.6z
M464,277.7v4.6h4.6v-4.6H464z M482.3,286.9v4.6h4.6v-4.6H482.3z M486.9,282.3v4.6h4.6v-4.6H486.9z M491.4,277.7v4.6h4.6v-4.6H491.4
z M477.7,277.7v4.6h4.6v-4.6H477.7z M473.1,273.1v4.6h4.6v-4.6H473.1z M468.6,268.6v4.6h4.6v-4.6H468.6z M464,264v4.6h4.6V264H464z
M482.3,273.1v4.6h4.6v-4.6H482.3z M486.9,268.6v4.6h4.6v-4.6H486.9z M491.4,264v4.6h4.6V264H491.4z"></path>
      </svg>
    </a>
</div></section>