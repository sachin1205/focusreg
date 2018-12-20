<?php

	/*
		Template Name: Front Page
	*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
       
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<!--Site Content-->
	<?php Starkers_Utilities::get_template_parts( array( 'parts/featured-listing-module' ) ); ?>
	<?php Starkers_Utilities::get_template_parts( array( 'parts/services-module' ) ); ?>
	<?php Starkers_Utilities::get_template_parts( array( 'parts/contact-module' ) ); ?>
	<?php Starkers_Utilities::get_template_parts( array( 'parts/resource-module' ) ); ?>
	<?php //Starkers_Utilities::get_template_parts( array( 'parts/home-contact-module' ) ); ?>
	<?php Starkers_Utilities::get_template_parts( array( 'parts/blog-module' ) ); ?>

<?php endwhile; ?>
<?php //Starkers_Utilities::get_template_parts( array( 'parts/resource-module' ) ); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>