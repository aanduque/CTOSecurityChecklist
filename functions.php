<?php

/**
 * Adds a custom theme selector on the customizer
 * 
 * @since 1.0.0
 * @return void
 */
add_action('after_setup_theme', 'checklist_init_theme');

function checklist_init_theme() {

  add_theme_support('custom-logo', array(
    'width'       => 170,
    'height'      => 60,
    'flex-height' => true,
    'flex-width'  => true,
    // 'header-text' => array('site-title', 'site-description'),
  ));

  add_theme_support( 'title-tag' );

} // end checklist_init_theme;


/**
 * Displayes the custom Logo
 *
 * @since 1.0.0
 * @return string
 */
function checklist_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

} // end checklist_the_custom_logo;

add_action('widgets_init', 'checklist_register_sidebars');

/**
 * Adding the bottom sidebars
 *
 * @since 1.0.0
 * @return void
 */
function checklist_register_sidebars() {
  
  register_sidebar( array(
    'id'            => 'project-by',
    'name'          => __('Project By', 'checklist'),
    'description'   => __('Project by footer widgets.', 'checklist'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar( array(
    'id'            => 'subscribe-form',
    'name'          => __('Subscription Form', 'checklist'),
    'description'   => __('Subscription form', 'checklist'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

} // end checklist_register_sidebars;

add_action('customize_register', 'mytheme_customizer_options');
/*
 * Add in our custom Accent Color setting and control to be used in the Customizer in the Colors section
 *
 */
function mytheme_customizer_options( $wp_customize ) {

  $wp_customize->add_setting(
      'main_color', //give it an ID
      array(
          'default' => '#591694', // Give it a default
      )
  );
  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'main_color', //give it an ID
         array(
             'label'      => __( 'Main Theme Color', 'checklist' ), //set the label to appear in the Customizer
             'section'    => 'colors', //select the section for it to appear under  
             'settings'   => 'main_color' //pick the setting it applies to
         )
     )
  );
}

add_action( 'wp_head', 'checklist_customize_css' );
/*
 * Output our custom Accent Color setting CSS Style
 *
 */
function checklist_customize_css() {
  ?>
    <style type="text/css">
      <?php echo include('custom-css.php'); ?>
    </style>
  <?php
}

add_action( 'init', 'checklist_create_book_tax' );

function checklist_create_book_tax() {
	register_taxonomy(
		'stage',
		'post',
		array(
			'label' => __( 'Stage' ),
			'rewrite' => array( 'slug' => 'stage' ),
			'hierarchical' => true,
		)
	);
}

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );