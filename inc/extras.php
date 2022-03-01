<?php


function slavaukraini_wp_theme_customize_register($wp_customize)
{
    // Add control for logo uploader
    $wp_customize->add_setting('slavaukraini_wp_theme_logo', array(
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slavaukraini_wp_theme_logo', array(
        'label'    => __('Upload Logo (replaces text)', 'slavaukraini-wp-theme'),
        'section'  => 'title_tagline',
        'settings' => 'slavaukraini_wp_theme_logo',
    )));
}

add_action('customize_register', 'slavaukraini_wp_theme_customize_register');
