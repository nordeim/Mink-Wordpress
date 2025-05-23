<?php
/**
 * Footer Builder
 * Copyright/credits Component
 * 
 * @package Sydney_Pro
 */

// @codingStandardsIgnoreStart WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

// List of options we'll need to move.
$opts_to_move = array(
    'general' => array(
        'footer_credits'
    ),
    'style'   => array()
);

$wp_customize->add_section(
    new Sydney_Section_Hidden(
        $wp_customize,
        'sydney_section_fb_component__copyright',
        array(
            'title'      => esc_html__( 'Copyright', 'sydney' ),
            'panel'      => 'sydney_panel_footer'
        )
    )
);

$wp_customize->add_setting(
    'sydney_section_fb_component__copyright_tabs',
    array(
        'default'           => '',
        'sanitize_callback' => 'esc_attr'
    )
);
$wp_customize->add_control(
    new Sydney_Tab_Control (
        $wp_customize,
        'sydney_section_fb_component__copyright_tabs',
        array(
            'label' 				=> '',
            'section'       		=> 'sydney_section_fb_component__copyright',
            'controls_general'		=> wp_json_encode(
                array_merge(
                    array(
                        '#customize-control-sydney_section_fb_component__copyright_visibility'
                    ),
                    array_map( function( $name ){ return "#customize-control-$name"; }, $opts_to_move[ 'general' ] )
                ),
            ),
            'controls_design'		=> wp_json_encode(
                array(
                    '#customize-control-sydney_section_fb_component__copyright_text_color',
                    '#customize-control-sydney_section_fb_component__copyright_links',
                    '#customize-control-sydney_section_fb_component__copyright_padding',
                    '#customize-control-sydney_section_fb_component__copyright_margin'
                )
            ),
            'priority' 				=> 20
        )
    )
);

// Visibility
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_visibility_desktop',
    array(
        'default' 			=> 'visible',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_visibility_tablet',
    array(
        'default' 			=> 'visible',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_visibility_mobile',
    array(
        'default' 			=> 'visible',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 
    new Sydney_Radio_Buttons( 
        $wp_customize, 
        'sydney_section_fb_component__copyright_visibility',
        array(
            'label'         => esc_html__( 'Visibility', 'sydney' ),
            'section'       => 'sydney_section_fb_component__copyright',
            'is_responsive' => true,
            'settings' => array(
                'desktop' 		=> 'sydney_section_fb_component__copyright_visibility_desktop',
                'tablet' 		=> 'sydney_section_fb_component__copyright_visibility_tablet',
                'mobile' 		=> 'sydney_section_fb_component__copyright_visibility_mobile'
            ),
            'choices'       => array(
                'visible' => esc_html__( 'Visible', 'sydney' ),
                'hidden'  => esc_html__( 'Hidden', 'sydney' )
            ),
            'priority'      => 42
        )
    ) 
);

// Text Color
$wp_customize->add_setting(
	'sydney_section_fb_component__copyright_text_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'sydney_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Sydney_Alpha_Color(
		$wp_customize,
		'sydney_section_fb_component__copyright_text_color',
		array(
			'label'         	=> esc_html__( 'Text Color', 'sydney' ),
			'section'       	=> 'sydney_section_fb_component__copyright',
			'priority'			=> 25
		)
	)
);

// Links Color
$wp_customize->add_setting(
	'sydney_section_fb_component__copyright_links_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'sydney_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_setting(
    'sydney_section_fb_component__copyright_links_color_hover',
    array(
        'default'           => '#212121',
        'sanitize_callback' => 'sydney_sanitize_hex_rgba',
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    new Sydney_Color_Group(
        $wp_customize,
        'sydney_section_fb_component__copyright_links',
        array(
            'label'    => esc_html__( 'Links Color', 'sydney' ),
            'section'  => 'sydney_section_fb_component__copyright',
            'settings' => array(
                'normal' => 'sydney_section_fb_component__copyright_links_color',
                'hover'  => 'sydney_section_fb_component__copyright_links_color_hover',
            ),
            'priority' => 25
        )
    )
);

// Layout Title
$wp_customize->add_setting(
    'shfb_footer_copyright_layout_title',
    array(
        'default'           => '',
        'sanitize_callback' => 'esc_attr'
    )
);

$wp_customize->add_control(
    new Sydney_Text_Control(
        $wp_customize,
        'shfb_footer_copyright_layout_title',
        array(
            'label'    => esc_html__( 'Layout', 'sydney' ),
            'section'  => 'sydney_section_fb_component__copyright',
            'priority' => 70,
            'separator' => 'before'
        )
    )
);

// Padding
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_padding_desktop',
    array(
        'default'           => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    ) 
);
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_padding_tablet',
    array(
        'default'           => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    ) 
);
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_padding_mobile',
    array(
        'default'           => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    ) 
);
$wp_customize->add_control( 
    new Sydney_Dimensions_Control( 
        $wp_customize, 
        'sydney_section_fb_component__copyright_padding',
        array(
            'label'           	=> __( 'Wrapper Padding', 'sydney' ),
            'section'         	=> 'sydney_section_fb_component__copyright',
            'sides'             => array(
                'top'    => true,
                'right'  => true,
                'bottom' => true,
                'left'   => true
            ),
            'units'              => array( 'px', '%', 'rem', 'em', 'vw', 'vh' ),
            'link_values_toggle' => true,
            'is_responsive'   	 => true,
            'settings'        	 => array(
                'desktop' => 'sydney_section_fb_component__copyright_padding_desktop',
                'tablet'  => 'sydney_section_fb_component__copyright_padding_tablet',
                'mobile'  => 'sydney_section_fb_component__copyright_padding_mobile'
            ),
            'priority'	      	 => 72
        )
    )
);

// Margin
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_margin_desktop',
    array(
        'default'           => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    ) 
);
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_margin_tablet',
    array(
        'default'           => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    ) 
);
$wp_customize->add_setting( 
    'sydney_section_fb_component__copyright_margin_mobile',
    array(
        'default'           => '{ "unit": "px", "linked": false, "top": "", "right": "", "bottom": "", "left": "" }',
        'sanitize_callback' => 'sydney_sanitize_text',
        'transport'         => 'postMessage'
    ) 
);
$wp_customize->add_control( 
    new Sydney_Dimensions_Control( 
        $wp_customize, 
        'sydney_section_fb_component__copyright_margin',
        array(
            'label'           	=> __( 'Wrapper Margin', 'sydney' ),
            'section'         	=> 'sydney_section_fb_component__copyright',
            'sides'             => array(
                'top'    => true,
                'right'  => true,
                'bottom' => true,
                'left'   => true
            ),
            'units'              => array( 'px', '%', 'rem', 'em', 'vw', 'vh' ),
            'link_values_toggle' => true,
            'is_responsive'   	 => true,
            'settings'        	 => array(
                'desktop' => 'sydney_section_fb_component__copyright_margin_desktop',
                'tablet'  => 'sydney_section_fb_component__copyright_margin_tablet',
                'mobile'  => 'sydney_section_fb_component__copyright_margin_mobile'
            ),
            'priority'	      	 => 72
        )
    )
);

// Move existing options.
$priority = 30;
foreach( $opts_to_move as $control_tabs ) {
    foreach( $control_tabs as $option_name ) {

		if( $wp_customize->get_control( $option_name ) === NULL ) {
            continue;
        }
		
        $wp_customize->get_control( $option_name )->section  = 'sydney_section_fb_component__copyright';
        $wp_customize->get_control( $option_name )->priority = $priority;
        $wp_customize->get_control( $option_name )->active_callback  = function(){};
        
        $priority++;
    }
}

// @codingStandardsIgnoreEnd WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound