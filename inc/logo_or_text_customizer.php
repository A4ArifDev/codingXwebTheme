<?php
    function CodingX_logo_or_text($wp_customize){
        $wp_customize->add_section( 'custom_logo_section', array(
            'title'          => __( 'Logo', 'custom_theme' ),
            'priority'       => 30,
        ) );
        $wp_customize->add_setting( 'custom_logo', array(
            'default'        => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
            'label'   => __( 'Logo', 'custom_theme' ),
            'section' => 'custom_logo_section',
            'settings'   => 'custom_logo',
        ) ) );

        $wp_customize->add_setting( 'logo_text', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'logo_text', array(
                'label'    => __( 'Logo Text', 'custom_theme' ),
                'section'  => 'custom_logo_section',
                'type'     => 'text',
                'settings' => 'logo_text',
            ) );
    
    }
    add_action('customize_register','CodingX_logo_or_text');
?>