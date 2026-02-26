<?php
function mytheme_customize_register( $wp_customize ) {
    // === Existing Title Section ===
    $wp_customize->add_section( 'mytheme_banner_section', array(
        'title'    => __( 'Custom Banner', 'mytheme' ),
        'priority' => 30,
    ));

    // Main Heading
    $wp_customize->add_setting( 'mytheme_custom_title', array(
        'default'   => 'My Default Title',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'mytheme_custom_title_control', array(
        'label'    => __( 'Site Title', 'mytheme' ),
        'section'  => 'mytheme_banner_section',
        'settings' => 'mytheme_custom_title',
        'type'     => 'text',
    ));

    // === New Subheading ===
    $wp_customize->add_setting( 'mytheme_custom_subheading', array(
        'default'   => 'You asked for a mask
that would make a world of difference.
Together, we made it.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'mytheme_custom_subheading_control', array(
        'label'    => __( 'Site Subheading', 'mytheme' ),
        'section'  => 'mytheme_banner_section',
        'settings' => 'mytheme_custom_subheading',
        'type'     => 'text',
    ));

    // === Banner Image ===
    $wp_customize->add_setting( 'mytheme_banner_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_banner_image_control', array(
        'label'    => __( 'Banner Image', 'mytheme' ),
        'section'  => 'mytheme_banner_section',
        'settings' => 'mytheme_banner_image',
    )));
}
add_action( 'customize_register', 'mytheme_customize_register' );
