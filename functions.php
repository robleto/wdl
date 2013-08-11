<?php {

function wdl_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar - Main (all)', 'wdl' ),
		'id' => 'sidebar-all',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar - Posts', 'wdl' ),
		'id' => 'sidebar-posts',
		'description' => __( 'Appears on Posts, but not Pages or the Front Page', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar - Pages', 'wdl' ),
		'id' => 'sidebar-pages',
		'description' => __( 'Appears on Pages, but not Posts or the Front Page', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer #1', 'wdl' ),
		'id' => 'footer-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'wdl' ),
		'before_widget' => '<aside id="footer-widgets-%1$s" class="%2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Footer #2', 'wdl' ),
		'id' => 'footer-2',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'wdl' ),
		'before_widget' => '<aside id="footer-widgets-%1$s" class="%2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Footer #3', 'wdl' ),
		'id' => 'footer-3',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'wdl' ),
		'before_widget' => '<aside id="footer-widgets-%1$s" class="%2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page - Alerts', 'wdl' ),
		'id' => 'frontpage-alerts',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="alert unit size1of1 %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page - Promo', 'wdl' ),
		'id' => 'frontpage-promo',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="unit size1of1 %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Front Page - Upper Line #1', 'wdl' ),
		'id' => 'frontpage-upper-line-1',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="unit size1of3 %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page - Upper Line #2', 'wdl' ),
		'id' => 'frontpage-upper-line-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="unit size1of3 %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page - Upper Line #3', 'wdl' ),
		'id' => 'frontpage-upper-line-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="unit size1of3 lastUnit %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Front Page - Lower Line', 'wdl' ),
		'id' => 'frontpage-lower-line',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'wdl' ),
		'before_widget' => '<aside id="%1$s" class="unit size1of3 lastUnit %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'wdl_widgets_init' );





// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">[ more ]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
return 25; // Or whatever you want the length to be.
}


add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true );
	add_image_size( 'category-thumb', 150, 9999 );

} ?>