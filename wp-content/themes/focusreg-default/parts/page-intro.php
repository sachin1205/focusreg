<div class="inner-wrap">
<h1>
<?php if(is_home()):  ?>Latest Post
<?php elseif(is_search()): ?>Search Results for '<?php echo get_search_query(); ?>'
<?php elseif(is_404()): ?>404: Page not found <?php elseif(is_archive()): ?>Archives
<?php elseif(get_field('pi_heading')): the_field('pi_heading'); else: the_title(); endif; ?>
</h1>
</div>
