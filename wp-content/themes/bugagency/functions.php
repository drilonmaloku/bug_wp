<?php

/**
 * bugagency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bugagency
 */
// Only enable in development (will log template and conditional tags)
// DEBUG LOG TEST

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bugagencypositive_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bugagencypositive, use a find and replace
		* to change 'bugagencypositive' to the name of your theme in all the template files.
		*/

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header' => esc_html__('Header', 'bugagencypositive'),
			'footer' => esc_html__('Footer', 'bugagencypositive'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bugagencypositive_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
	
	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'bugagencypositive_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bugagencypositive_content_width()
{
	$GLOBALS['content_width'] = apply_filters('bugagencypositive_content_width', 640);
}
add_action('after_setup_theme', 'bugagencypositive_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bugagencypositive_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'bugagencypositive'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'bugagencypositive'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'bugagencypositive_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bugagencypositive_scripts()
{
	// Deregister WordPress default jQuery and enqueue our own in header
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', false);

	// Enqueue CSS files
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
	wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
	wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_style('@fancyapps/ui', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
	wp_enqueue_style('bugagencypositive-style', get_template_directory_uri() . '/assets/prod/style.css', array('bootstrap'), time());

	// Enqueue JS files that depend on jQuery
	wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
	wp_enqueue_script('@fancyapps/ui', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array('jquery'), null, true);
	
	// Enqueue pagination script
	wp_enqueue_script('ajax-pagination',  get_template_directory_uri() . '/assets/js/pagination.js', array('jquery'), null, true);
	wp_localize_script('ajax-pagination', 'ajaxpagination', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('ajax_nonce'),
	));

	// Enqueue theme scripts last
	wp_enqueue_script('bugagencypositive-navigation', get_template_directory_uri() . '/assets/prod/scripts.min.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'bugagencypositive_scripts');


if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'     => 'Theme Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-settings',
		'capability'    => 'edit_posts',
		'redirect'        => false
	));

	acf_add_options_page(array(
		'page_title'     => 'Footer Settings',
		'menu_title'    => 'Footer Settings',
		'menu_slug'     => 'footer-settings',
		'capability'    => 'edit_posts',
		'redirect'        => false
	));
}

add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<span[^>]*>/', '', $content);
    $content = str_replace('</span>', '', $content);

    return $content;
});




function add_category_image_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_category_image',
        'title' => 'Category Image',
        'fields' => array(
            array(
                'key' => 'field_category_image',
                'label' => 'Category Image',
                'name' => 'category_image',
                'type' => 'image',
                'instructions' => 'Upload an image for this category',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'mark',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
}
add_action('acf/init', 'add_category_image_fields');

function projects_post_type() {
    register_post_type('projects', [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project'
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'supports' => ['title', 'thumbnail', 'editor'],
		'menu_icon' => 'dashicons-portfolio',
    ]);
}
add_action('init', 'projects_post_type');

