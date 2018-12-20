<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	register_nav_menus(array('primary' => 'Primary Navigation'));

	//Walker Class for Menus

	class themeslug_walker_nav_menu extends Walker_Nav_Menu {

	// add classes to ul sub-menus
	 function start_lvl( &$output, $depth = 0, $args = array() ) {
	// depth dependent classes
	$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
	$display_depth = ( $depth + 2); // because it counts the first submenu as 0
	$classes = array(
	    'sub-menu',
	    ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
	    ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
	    'sn-level-' . $display_depth
	    );
	$class_names = implode( ' ', $classes );

	// build html
	$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}

	// add main/sub classes to li's and links
	 function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	global $wp_query;
	$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	$display_depth = ( $depth + 1);
		
	// depth dependent classes
	$depth_classes = array(

	    ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
	    ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
	    ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
	    'sn-li-l' . $display_depth
	);
	$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

	// passed classes
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

	// build html
	$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

	// link attributes
	$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	$attributes .= ' class="sn-menu-link ' . ( $depth > 0 ? 'sn-sub-menu-link' : 'sn-main-menu-link' ) . '"';

	$item_output = sprintf( '%1$s<a%2$s><span>%3$s%4$s%5$s</span></a>%6$s',
	    $args->before,
	    $attributes,
	    $args->link_before,
	    apply_filters( 'the_title', $item->title, $item->ID ),
	    $args->link_after,
	    $args->after
	);

	// build html
	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	}

	
	// Emphasize beginning of page    
	function emph_function( $atts, $content = null ) {
	return '<p class="emph">'.do_shortcode($content).'</p>';
	}
	add_shortcode('emph', 'emph_function');

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head() & wp_footer()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		//Modernizr - header
		wp_register_script( 'modernizr', get_template_directory_uri().'/js/vendor/modernizr.min.js');
		wp_enqueue_script( 'modernizr' );

		//Use google jquery library instead of WordPress default - footer
    	wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
		wp_enqueue_script('jquery');

		//Both main.js and plugins.js minified - footer
		wp_register_script( 'plugins', get_template_directory_uri().'/js/production.min.js', array( 'jquery' ), '', true);
		wp_enqueue_script( 'plugins' );


		//Style.css - header
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	



	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}

	/* ========================================================================================================================
	
	Misc
	
	======================================================================================================================== */

	// Excerpt for Pages    
	add_action( 'init', 'my_add_excerpts_to_pages' );
	function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
	}
	//Remove Website field from comments & comment styling prompt

	function remove_comment_fields($fields) {
	    unset($fields['url']);
	    return $fields;
	}
	add_filter('comment_form_default_fields','remove_comment_fields');

	function remove_comment_styling_prompt($defaults) {
		$defaults['comment_notes_after'] = '';
		return $defaults;
	}
	add_filter('comment_form_defaults', 'remove_comment_styling_prompt');


	//Remove inline image sizing
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}

	//Plugin Updates
	add_filter( 'auto_update_plugin', '__return_true' );

	//Advanced Custom Fields Options	
	if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	}


	/*================= Responsive images =============*/
	function adjust_image_sizes_attr( $sizes, $size ) {
   $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
   return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );


/**
 * =======================================================================================================================
 * Extend WordPress search to include custom fields
 *
 * ======================================================================================================================= */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

/*Solved gravity form console error*/
add_filter("gform_init_scripts_footer", "init_scripts");
function init_scripts() {
return true;
}
/*End*/

/*Enable Custom file uplode*/
function custom_upload_mimes ( $existing_mimes=array() ) {
	$existing_mimes['dwg'] = 'application/acad';
	$existing_mimes['ai'] = 'application/postscript';
	$existing_mimes['dxf'] = 'application/dxf';
	$existing_mimes['eps'] = 'application/postscript';
	
	return $existing_mimes;
	}
add_filter('upload_mimes','custom_upload_mimes');
