<?php
/*
* my theme functions
*/

// theme title
add_theme_support( 'title-tag' );


// theme CSS and jQuery file calling
function pro_css_js_file_calling(){
    wp_enqueue_style( 'pro_style', get_stylesheet_uri( ) );
    wp_register_style( 'bootstrap', get_template_directory_uri( ).'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style( 'custom', get_template_directory_uri( ).'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'custom' );

    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri( ).'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script( 'main', get_template_directory_uri( ).'/js/main.js', array(), '1.0.0', 'true');
}
add_action( 'wp_enqueue_scripts','pro_css_js_file_calling' );

// theme function
function pro_customizer_register($wp_customize){
    $wp_customize->add_section('pro_header_area', array(
        'title'=>__('Header Area','digitech'),
        'description'=>'If you interested to update your header area, you can do it here.'
    ));

    $wp_customize->add_setting ('pro_logo', array(
        'default'=>get_bloginfo( 'template_directory' ).'/img/logo.png',
     ));

     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'pro_logo', array(
        'label' => 'Logo Upload',
        'setting' => 'pro_logo',
        'section' => 'pro_header_area',
     )));

}
add_action( 'customize_register','pro_customizer_register' );