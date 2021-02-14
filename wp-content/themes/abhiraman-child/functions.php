<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Abhiraman
 * @since Abhiraman 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'abhiraman_child_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Abhiraman 1.0
	 *
	 * @return void
	 */
	function abhiraman_child_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Abhiraman, use a find and replace
		 * to change 'abhiraman_child' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'abhiraman_child', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'abhiraman_child' ),
				'footer'  => __( 'Secondary menu', 'abhiraman_child' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
//		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
//		add_theme_support( 'editor-styles' );
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > Abhiraman_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

//		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
//		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'abhiraman_child' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'abhiraman_child' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'abhiraman_child' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'abhiraman_child' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'abhiraman_child' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'abhiraman_child' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'abhiraman_child' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'abhiraman_child' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'abhiraman_child' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'abhiraman_child' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'abhiraman_child' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'abhiraman_child' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'abhiraman_child' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'abhiraman_child' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'abhiraman_child' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'abhiraman_child' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'abhiraman_child' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'abhiraman_child' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'abhiraman_child' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'abhiraman_child' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'abhiraman_child' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'abhiraman_child' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'abhiraman_child' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'abhiraman_child' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'abhiraman_child' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'abhiraman_child' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'abhiraman_child' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'abhiraman_child' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'abhiraman_child' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'abhiraman_child' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'abhiraman_child' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'abhiraman_child' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', abhiraman_child_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );
	}
}
add_action( 'after_setup_theme', 'abhiraman_child_setup' );

/**
 * Register widget area.
 *
 * @since Abhiraman 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function abhiraman_child_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'abhiraman_child' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'abhiraman_child' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'abhiraman_child_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Abhiraman 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function abhiraman_child_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'abhiraman_child_content_width', 750 );
}
add_action( 'after_setup_theme', 'abhiraman_child_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Abhiraman 1.0
 *
 * @return void
 */
function abhiraman_child_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'abhiraman_child-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'abhiraman_child-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	// RTL styles.
	wp_style_add_data( 'abhiraman_child-style', 'rtl', 'replace' );

	// Print styles.
//	wp_enqueue_style( 'abhiraman_child-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'abhiraman_child-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'abhiraman_child-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'abhiraman_child-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'abhiraman_child-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'abhiraman_child-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'abhiraman_child-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'abhiraman_child-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'abhiraman_child-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'abhiraman_child_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since Abhiraman 1.0
 *
 * @return void
 */
function abhiraman_child_block_editor_script() {

	wp_enqueue_script( 'abhiraman_child-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'abhiraman_child_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function abhiraman_child_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	}

	// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'abhiraman_child_skip_link_focus_fix' );

/** Enqueue non-latin language styles
 *
 * @since Abhiraman 1.0
 *
 * @return void
 */
function abhiraman_child_non_latin_languages() {
	$custom_css = abhiraman_child_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'abhiraman_child-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'abhiraman_child_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-abhiraman-child-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-abhiraman-child-custom-colors.php';
new Abhiraman_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-abhiraman-child-customize.php';
new Abhiraman_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-abhiraman-child-dark-mode.php';
new Abhiraman_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Abhiraman 1.0
 *
 * @return void
 */
function abhiraman_child_customize_preview_init() {
	wp_enqueue_script(
		'abhiraman_child-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'abhiraman_child-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'abhiraman_child-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'abhiraman_child_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Abhiraman 1.0
 *
 * @return void
 */
function abhiraman_child_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'abhiraman_child-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'abhiraman_child_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Abhiraman 1.0
 *
 * @return void
 */
function abhiraman_child_the_html_classes() {
	$classes = apply_filters( 'abhiraman_child_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Abhiraman 1.0
 *
 * @return void
 */
function abhiraman_child_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'abhiraman_child_add_ie_class' );


/* Disable Wysiwyg Completely */
add_action('init', 'my_remove_editor_from_post_type');
function my_remove_editor_from_post_type() {
    remove_post_type_support( 'page', 'editor' );
}

/* Enable SVG Support */
function my_custom_mime_types( $mimes ) {
 
// New allowed mime types.
$mimes['svg'] = 'image/svg+xml';
$mimes['svgz'] = 'image/svg+xml';
$mimes['doc'] = 'application/msword';
 
// Optional. Remove a mime type.
unset( $mimes['exe'] );
 
return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );


/* Enable SVG Support */
define('ALLOW_UNFILTERED_UPLOADS', true);


/* My Custom CSS  */
function my_stylesheets(){
	wp_enqueue_style('mystyles', get_stylesheet_directory_uri() . '/assets/css/styles.css'); 
}
add_action('wp_enqueue_scripts','my_stylesheets');

/* Carbon Fields */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {

Container::make( 'post_meta', __( 'Title' ) )
	->where( 'post_type', '=', 'page' )   // --------------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'wedding.php' )     // -----> only show in specific templates				
	->add_fields( array(
//Field::make( 'text', 'wedding-title', ' ' ),
Field::make( 'image', 'titleimg', 'Image' )->set_value_type( 'url' )->set_width(30),

));


Container::make( 'post_meta', __( 'Main Image' ) )
	->where( 'post_type', '=', 'page' )   // --------------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'wedding.php' )     // -----> only show in specific templates				
	->add_fields( array(
Field::make( 'image', 'main-image', ' ' )->set_value_type( 'url' )->set_width(20),
Field::make( 'image', 'name-image', 'Couple Names' )->set_value_type( 'url' )->set_width(20),
//Field::make( 'text', 'groom-name', 'Groom-name' )->set_width(40),
//Field::make( 'text', 'bride-name', 'Bride-name' )->set_width(40)
));


Container::make( 'post_meta', __( 'Quote' ) )
	->where( 'post_type', '=', 'page' )   // --------------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'wedding.php' )     // -----> only show in specific templates				
	->add_fields( array(
Field::make( 'text', 'quote-text', 'Quote-text' )->set_width(70),
Field::make( 'text', 'quote-author', 'Quote-author' )->set_width(30)
));

Container::make( 'post_meta', __( 'Date' ) )
	->where( 'post_type', '=', 'page' )   // --------------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'wedding.php' )     // -----> only show in specific templates				
	->add_fields( array(
//Field::make( 'text', 'date', 'Date' )->set_width(20),
Field::make( 'text', 'month-year', 'Month and Year' )->set_width(70),
Field::make( 'text', 'daystogotext', 'Days to Go' )->set_width(30)
));

Container::make( 'post_meta', __( 'Venue & Muhurtham' ) )
	->where( 'post_type', '=', 'page' )   // --------------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'wedding.php' )     // -----> only show in specific templates				
	->add_fields( array(
Field::make( 'text', 'venue', 'Venue' )->set_width(50),
Field::make( 'text', 'muhurtham', 'Muhurtham' )->set_width(50)
));

Container::make( 'post_meta', __( 'Live Link & Location Map' ) )
	->where( 'post_type', '=', 'page' )   // --------------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'wedding.php' )     // -----> only show in specific templates				
	->add_fields( array(
Field::make( 'text', 'livelinktitle', 'Title' )->set_width(100),
Field::make( 'textarea', 'livelink', 'Live YouTube Link' )->set_width(100),
Field::make( 'text', 'location-title', 'Title' )->set_width(100),
Field::make( 'text', 'location-map', 'Location Map' )->set_width(100)
));


Container::make( 'post_meta', __( 'Photos' ) )
->where( 'post_type', '=', 'page' ) // only show our new fields on pages
->where( 'post_template', '=', 'wedding.php' )
->add_fields( array(
	Field::make( 'complex', 'photos', 'Photos' )
	->add_fields( array(
Field::make( 'image', 'photos', 'Image' )->set_value_type( 'url' )->set_width(30),
)),
));

Container::make( 'post_meta', __( 'Courtesy' ) )
	->where( 'post_type', '=', 'page' )   // --------------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'wedding.php' )     // -----> only show in specific templates				
	->add_fields( array(
Field::make( 'text', 'piccourtesy', 'Photo Courtesy' )->set_width(50),
Field::make( 'text', 'webcourtesy', 'Web Courtesy' )->set_width(50)
));

}






