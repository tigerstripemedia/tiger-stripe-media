<?php
/**
 * Tiger Stripe Media functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tiger_Stripe_Media
 */

if ( ! function_exists( 'tiger_stripe_media_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tiger_stripe_media_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Tiger Stripe Media, use a find and replace
		 * to change 'tiger-stripe-media' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tiger-stripe-media', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'tiger-stripe-media' ),
			'footer-one' => __( 'Footer Menu One', 'tiger-stripe-media' ),
			'footer-two' => __( 'Footer Menu Two', 'tiger-stripe-media' ),
		) );
		
		// Register Custom Navigation Walker
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tiger_stripe_media_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tiger_stripe_media_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tiger_stripe_media_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'tiger_stripe_media_content_width', 640 );
}
add_action( 'after_setup_theme', 'tiger_stripe_media_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tiger_stripe_media_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tiger-stripe-media' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tiger-stripe-media' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tiger_stripe_media_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tiger_stripe_media_scripts() {
	wp_enqueue_style( 'tiger-stripe-media-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tiger-stripe-media-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tiger-stripe-media-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tiger_stripe_media_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Logo on login screen
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login-logo.png);
			width: 320px;
			height: 95.934px;
			background-size: cover;
			background-repeat: no-repeat;
        	padding-bottom: 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Logo link on login screen
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Remove WordPress logo form admin bar
function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

// Admin footer modification
  
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Made with &#9825; by <a href="http://www.tigerstripemedia.co.uk" target="_blank">Tiger Stripe Media</a></span>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');

// Rename Flamingo Plugin

function rename_header_to_logo( $translated, $original, $domain ) {

$strings = array(
    'Flamingo' => 'Messages',
    'Contact' => 'Contact Forms'
);

if ( isset( $strings[$original] ) && is_admin() ) {
    $translations = &get_translations_for_domain( $domain );
    $translated = $translations->translate( $strings[$original] );
}

  return $translated;
}

add_filter( 'gettext', 'rename_header_to_logo', 10, 3 );

// Replaces the excerpt "more text by a link"
 function new_excerpt_more($more) {
	 global $post;
	 return '... <a class="more-tag text-muted" href="'. get_permalink($post->ID) . '"> continue reading <i class="fas fa-angle-right"></i></a>';
 }
 add_filter('excerpt_more', 'new_excerpt_more');


// Moving comments form text area 
add_filter( 'comment_form_fields', 'move_comment_field' );
function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

//Display website on new window when readers click Commenter's name
add_filter( "get_comment_author_link", "pxzoom_modifiy_comment_author_anchor" );
function pxzoom_modifiy_comment_author_anchor( $author_link ){
    return str_replace( "<a", "<a target='_blank'", $author_link );
}

// Open author's website in new tab
function get_author_link_target_blank() {
    if ( get_the_author_meta('url') ) {
        return sprintf( '<a href="%1$s" title="%2$s" rel="author external" target="_blank">%3$s</a>',
        // added this part -------------------------------------------------^
            esc_url( get_the_author_meta('url') ),
            /* translators: %s: author's display name */
            esc_attr( sprintf( __( 'Visit %s&#8217;s website' ), get_the_author() ) ),
            get_the_author()
        );
    } else {
        return get_the_author();
    }
}

// Remove “Category:”, “Tag:”, “Author:” from the_archive_title
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

// Create search form
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform custom-search-form form-inline" action="' . home_url( '/' ) . '" >
    <label class="sr-only" for="s">' . __( 'Search for:' ) . '</label>
    <input class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search the blog..."/>
    <button type="submit" value="'. esc_attr__( 'Search' ) .'" id="searchsubmit" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

// Setting a default profile icon
add_filter( 'avatar_defaults', 'tsmavatar' );
function tsmavatar ($avatar_defaults) {
    $myavatar = get_bloginfo('template_directory') . '/assets/img/tsm-avatar.png';
    // OR --> $myavatar = "https://cdn.crunchify.com/Crunchify.png";
    $avatar_defaults[$myavatar] = "TSM Avatar";
    return $avatar_defaults;
}

// Social media share buttons
function wcr_share_buttons() {
    $url = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));

    include( locate_template('share-template.php', false, false) );
}

// Remove paragraph tags from contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Remove span tags from contact form 7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

//Exclude pages from WordPress Search
if (!is_admin()) {
function wpb_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}
