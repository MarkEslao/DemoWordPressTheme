<?php
add_theme_support('custom-background', apply_filters('markeslao_custom_background_args', array(
    'default-color' => 'FFFFFF',
    'default-image' => '',
)));
function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_attr__( 'strong magenta', 'themeLangDomain' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => esc_attr__( 'light grayish magenta', 'themeLangDomain' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => esc_attr__( 'very light gray', 'themeLangDomain' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => esc_attr__( 'very dark gray', 'themeLangDomain' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
}
 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

function markeslao_menus()
{

    $locations = array(
        'primary' => "Desktop Primary Top Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'markeslao_menus');

function markeslao_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('markeslao-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('markeslao-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'markeslao_register_styles');

function markeslao_register_scripts()
{

    wp_enqueue_script('markeslao-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), '5.0.2', true);
    wp_enqueue_script('markeslao-scripts', get_template_directory_uri() . "/assets/js/scripts.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'markeslao_register_scripts');

function markeslao_widget_area()
{

    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_wdiget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<p class="m-0 text-center text-white">',
            'after_wdiget' => '</p>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'markeslao_widget_area');
