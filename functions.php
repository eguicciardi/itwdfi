<?php
    
    function ifiwdfi_enqueue_styles() {

        $parent_style = 'parent-style';

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style )
        );
    }
    add_action( 'wp_enqueue_scripts', 'ifiwdfi_enqueue_styles' );

    function ifiwdfi_scripts() {
        
        wp_enqueue_script( 'script-name', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
    
    }
    add_action( 'wp_enqueue_scripts', 'ifiwdfi_scripts' );