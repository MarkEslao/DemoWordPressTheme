<?php
class Theme_Prefix_Color_Scheme {
    public function __construct() {    
        add_action( 'customize_register', array( $this, 'customizer_register' ) );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'customize_js' ) );
        add_action( 'customize_controls_print_footer_scripts', array( $this, 'color_scheme_template' ) );
        add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'output_css' ) );
    }

    public function customizer_register( WP_Customize_Manager $wp_customize ) {}
    public function customize_js() {}
    public function color_scheme_template() {}
    public function customize_preview_js() {}
    public function output_css() {}
}
