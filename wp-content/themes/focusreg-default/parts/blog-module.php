<section class="blog-feed">
  <div class="inner-wrap-fullwidth">
    <h2>Articles</h2>
    

<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 <a href="<?php the_permalink() ?>" class="bf-item">
      <h2 class="bfi-header"><?php the_title(); ?></h2>
      <p class="bfi-subheader">Posted in: <?php  $category = get_the_category(); echo $category[0]->cat_name; ?> / Date: <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time></p>
      <div class="bfi-body">
        <p><?php the_excerpt(); ?></p>
      </div>
      <svg class="bfi-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="32px" height="32px" viewBox="464 264 32 32" enable-background="new 464 264 32 32" xml:space="preserve">
        <path fill="#000000" d="M482.3,291.4v4.6h-4.6v-4.6H482.3z M473.1,286.9v4.6h4.6v-4.6H473.1z M468.6,282.3v4.6h4.6v-4.6H468.6z
M464,277.7v4.6h4.6v-4.6H464z M482.3,286.9v4.6h4.6v-4.6H482.3z M486.9,282.3v4.6h4.6v-4.6H486.9z M491.4,277.7v4.6h4.6v-4.6H491.4
z M477.7,277.7v4.6h4.6v-4.6H477.7z M473.1,273.1v4.6h4.6v-4.6H473.1z M468.6,268.6v4.6h4.6v-4.6H468.6z M464,264v4.6h4.6V264H464z
M482.3,273.1v4.6h4.6v-4.6H482.3z M486.9,268.6v4.6h4.6v-4.6H486.9z M491.4,264v4.6h4.6V264H491.4z"></path>
      </svg>
    </a>


 
<?php 
endwhile;
wp_reset_postdata();
?>





  </div>
</section>