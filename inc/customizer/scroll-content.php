<?php
function mytheme_scroll_customize_register( $wp_customize ) {

    // === Scroll Content Section ===
    $wp_customize->add_section( 'mytheme_scroll_section', array(
        'title'    => __( 'Scroll Content', 'mytheme' ),
        'priority' => 40,
    ));

    // Title 1
    $wp_customize->add_setting( 'mytheme_scroll_title1', array(
        'default'   => 'First Section Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'mytheme_scroll_title1_control', array(
        'label'    => __( 'Title 1', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_title1',
        'type'     => 'text',
    ));

    // Paragraph 1
    $wp_customize->add_setting( 'mytheme_scroll_paragraph1', array(
        'default'   => 'First section paragraph content goes here.',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control( 'mytheme_scroll_paragraph1_control', array(
        'label'    => __( 'Paragraph 1', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_paragraph1',
        'type'     => 'textarea',
    ));

    // Title 2
    $wp_customize->add_setting( 'mytheme_scroll_title2', array(
        'default'   => 'Second Section Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'mytheme_scroll_title2_control', array(
        'label'    => __( 'Title 2', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_title2',
        'type'     => 'text',
    ));

    // Paragraph 2
    $wp_customize->add_setting( 'mytheme_scroll_paragraph2', array(
        'default'   => 'Second section paragraph content goes here.',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control( 'mytheme_scroll_paragraph2_control', array(
        'label'    => __( 'Paragraph 2', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_paragraph2',
        'type'     => 'textarea',
    ));

    // Title 3
    $wp_customize->add_setting( 'mytheme_scroll_title3', array(
        'default'   => 'Third Section Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'mytheme_scroll_title3_control', array(
        'label'    => __( 'Title 3', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_title3',
        'type'     => 'text',
    ));

    // Paragraph 3
    $wp_customize->add_setting( 'mytheme_scroll_paragraph3', array(
        'default'   => 'Third section paragraph content goes here.',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control( 'mytheme_scroll_paragraph3_control', array(
        'label'    => __( 'Paragraph 3', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_paragraph3',
        'type'     => 'textarea',
    ));
    // Title 4
    $wp_customize->add_setting( 'mytheme_scroll_title4', array(
        'default'   => 'Fourth Section Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'mytheme_scroll_title4_control', array(
        'label'    => __( 'Title 4', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_title4',
        'type'     => 'text',
    ));

    // Paragraph 4
    $wp_customize->add_setting( 'mytheme_scroll_paragraph4', array(
        'default'   => 'Fourth section paragraph content goes here.',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control( 'mytheme_scroll_paragraph4_control', array(
        'label'    => __( 'Paragraph 4', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_paragraph4',
        'type'     => 'textarea',
    ));
    // Title 5
    $wp_customize->add_setting( 'mytheme_scroll_title5', array(
        'default'   => 'Fifth Section Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'mytheme_scroll_title5_control', array(
        'label'    => __( 'Title 5', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_title5',
        'type'     => 'text',
    ));

    // Paragraph 5
    $wp_customize->add_setting( 'mytheme_scroll_paragraph5', array(
        'default'   => 'Fifth section paragraph content goes here.',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control( 'mytheme_scroll_paragraph5_control', array(
        'label'    => __( 'Paragraph 5', 'mytheme' ),
        'section'  => 'mytheme_scroll_section',
        'settings' => 'mytheme_scroll_paragraph5',
        'type'     => 'textarea',
    ));
    
}
add_action( 'customize_register', 'mytheme_scroll_customize_register' );
