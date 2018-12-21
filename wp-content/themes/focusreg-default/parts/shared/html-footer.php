</div>
<?php if(is_home()): ?>
		<div id="newsletterFrm" class="white-popup mfp-hide mfp-zoom-in"><?php es_subbox( $namefield =  "No", $desc = "", $group = "" ); ?></div>
<?php endif; ?>		
		<?php wp_footer(); ?>
		<?php if(get_field('before_the_body')):?>
		<?php the_field('before_the_body'); ?>
	<?php elseif(get_field('before_the_body','options')):?>
		<?php the_field('before_the_body','options'); ?>
	<?php endif;?>
	<?php if(is_home()): ?>
		<script type="text/javascript">
		$(window).load(function () {
      setTimeout(function(){
    $.magnificPopup.open({
     items: {
            src: '#newsletterFrm' //ID OF INLINE ELEMENT
                },
            type:'inline',
      mainClass: 'mfp-zoom-in'
            });
     }, 1000);  // equals 100 seconds
        });

       
	</script>
  <?php endif; ?>
    </body>
</html>