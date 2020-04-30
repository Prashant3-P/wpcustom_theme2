<?php 


/* CSS Boostrap Jquery */
function my_ekans(){
	 
	 /* including css */
     wp_enqueue_style('style', get_stylesheet_uri());
     wp_enqueue_style('styles', get_template_directory_uri().'/assets/css/blog-style.css');
     wp_enqueue_style('styless', get_template_directory_uri().'/assets/css/blog-single-style.css');
     
     
	 /* including boostrap css & js w*/
	 wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css');

	 wp_enqueue_script('jquery');
	 wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js');

     /* including javascript */
     wp_enqueue_script('urscript', get_template_directory_uri().'/assets/js/myscript.js');	 
}

add_action('wp_enqueue_scripts','my_ekans');



//add custom logo
function themename_custom_logo_setup() {
 add_theme_support('custom-logo');
 add_theme_support( 'post-thumbnails' );
 add_image_size('hell-ride', 768, 400, true);
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


/******************************************************************************************************/

//Add custom theme customize option
function custom_theme_settings($wp_customize){
   //we have to add our custom controls
   
   //titleArea
   $wp_customize->add_section("custom_theme_section_area", array(
      "title"=>"Blog theme Settings"
   ));
  
   $wp_customize->add_setting("custom_theme_title_setting", array(
      "default"=>"Blog Text Header"
   ));

   $wp_customize->add_control("custom_theme_title_control", array(
      "label"=>"Enter Title",
      "section"=>"custom_theme_section_area",
      "settings"=>"custom_theme_title_setting"
   ));


   //text area
   $wp_customize->add_setting("custom_theme_description_setting", array(
      "default"=>"This is description dummy text"
   ));

   $wp_customize->add_control("custom_theme_description_control", array(
      "label"=>"Put your Desription",
      "section"=>"custom_theme_section_area",
      "settings"=>"custom_theme_description_setting",
      "type"=>"textarea"
   ));


   //Image control
   $wp_customize->add_setting("custom_theme_imageControl_setting");

   $wp_customize->add_control(new WP_Customize_Image_Control(
   	    $wp_customize, 'custom_theme_imageControl', 
   	    array(
        'label'    => 'Upload Image',
        'settings'  => 'custom_theme_imageControl_setting',
        'section' => 'custom_theme_section_area'
      )
    ));

}

add_action('customize_register','custom_theme_settings');



//Add Banner theme customize option
function banner_theme_settings($wp_customize){
   //we have to add our custom controls
   
   //titleArea
   $wp_customize->add_section("banner_theme_section_area", array(
      "title"=>"Banner theme Settings"
   ));
  
   $wp_customize->add_setting("banner_theme_title_setting", array(
      "default"=>"Banner Text Header"
   ));

   $wp_customize->add_control("banner_theme_title_control", array(
      "label"=>"Enter Title",
      "section"=>"banner_theme_section_area",
      "settings"=>"banner_theme_title_setting"
   ));


   //text area
   $wp_customize->add_setting("banner_theme_description_setting", array(
      "default"=>"This is description dummy text"
   ));

   $wp_customize->add_control("banner_theme_description_control", array(
      "label"=>"Put your Desription",
      "section"=>"banner_theme_section_area",
      "settings"=>"banner_theme_description_setting",
      "type"=>"textarea"
   ));


   //Image control
   $wp_customize->add_setting("banner_theme_imageControl_setting");

   $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'banner_theme_imageControl', 
        array(
        'label'    => 'Upload Image',
        'settings' => 'banner_theme_imageControl_setting',
        'section' => 'banner_theme_section_area'
      )
    ));

}

add_action('customize_register','banner_theme_settings');

/******************************************************************************************************/




// Navigation Menus 
register_nav_menus(array(
	'primary' => __('Primary Menu')
));


require get_template_directory() . '/wp_bootstrap_navwalker.php';



//Sidebar function
function ekans_widgets_init() {
    register_sidebar( array(
        'name'          => 'Primary Sidebar',
        'id'            => 'sidebar-1',
        'class'         => '',
        'before_widget' => '<div class="categories-link">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'ekans_widgets_init' );










