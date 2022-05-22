<?php
// if (!defined('_S_VERSION')) {
// 	// Replace the version number of the theme on each release.
// 	define('_S_VERSION', '1.0.0');
// }

function fujichi_setup()
{
	load_theme_textdomain('fujichi', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	register_nav_menus([
		'header_nav' => 'ヘッダーナビゲーション',
		'footer_nav' => 'フッターナビゲーション',
	]);

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
			'fujichi_custom_background_args',
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

	// 『カテゴリー：』、『タグ：』、『月：』の削除
	add_filter('get_the_archive_title', function ($title) {
		if (is_category()) {
			$title = single_cat_title('', false); //カテゴリー：を消す
		} elseif (is_tag()) {
			$title = single_tag_title('', false);  //タグ：を消す
		} elseif (is_date()) {
			$title = get_the_time('Y年n月');  //月：を消す
		};
		return $title;
	});
}
add_action('after_setup_theme', 'fujichi_setup');

// /**
//  * Set the content width in pixels, based on the theme's design and stylesheet.
//  *
//  * Priority 0 to make it available to lower priority callbacks.
//  *
//  * @global int $content_width
//  */
// function fujichi_content_width()
// {
// 	$GLOBALS['content_width'] = apply_filters('fujichi_content_width', 640);
// }
// add_action('after_setup_theme', 'fujichi_content_width', 0);

// /**
//  * Register widget area.
//  *
//  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
//  */
// function fujichi_widgets_init()
// {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__('Sidebar', 'fujichi'),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__('Add widgets here.', 'fujichi'),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action('widgets_init', 'fujichi_widgets_init');

// /**
//  * Enqueue scripts and styles.
//  */
function my_script()
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array());
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap', false);
	wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js');
	
	if (is_front_page()) {
		wp_enqueue_script('opening', get_template_directory_uri() . '/js/opening.js');
	}
}
add_action('wp_enqueue_scripts', 'my_script');
// 	wp_enqueue_script('ripples',get_template_directory_uri() . '/js/jquery.ripples-min.js', array(),'1.0.0', 'all');

// 	wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

// 	if (is_archive()) {
// 		wp_enqueue_style('archive', get_theme_file_uri('/css/archive.css'), array(), '1.0.0', 'all');
// 	}

// 	if (is_singular()) {
// 		wp_enqueue_style('single', get_theme_file_uri('/css/single.css'), array(), '1.0.0', 'all');
// 	}

// 	if (is_singular() && comments_open() && get_option('thread_comments')) {
// 		wp_enqueue_script('comment-reply');
// 	}
// }

// /**
//  * Implement the Custom Header feature.
//  */
// require get_template_directory() . '/inc/custom-header.php';

// /**
//  * Custom template tags for this theme.
//  */
// require get_template_directory() . '/inc/template-tags.php';

// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';

// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';

// /**
//  * Load Jetpack compatibility file.
//  */
// if (defined('JETPACK__VERSION')) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }



// ///* original *///

// // ページのId取得
// function page_id_get($obj)
// {
// 	if (get_page_by_path(($obj))) :
// 		$page_id = get_page_by_path($obj);
// 		$page = get_post($page_id);
// 		$page_get = apply_filters('the_content', $page->post_content); //改行表示
// 		return [$page, $page_get];
// 	endif;
// }

// // アイキャッチ画像とその代替テキスト取得
// function get_thumb_img($id = '', $size = 'full')
// {
// 	$id = (!$id == '') ? $id : get_the_ID();
// 	if (!has_post_thumbnail($id)) return false;

// 	$thumb_id = get_post_thumbnail_id($id);
// 	$thumb_img = wp_get_attachment_image_src($thumb_id, $size);
// 	$thumb_src = $thumb_img[0];

// 	if (get_post_meta($thumb_id, '_wp_attachment_image_alt', true)) :
// 		$thumb_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
// 	else :
// 		$thumb_alt = '';
// 	endif;

// 	echo '<img src="' . $thumb_src . '" alt="' . $thumb_alt . '" class="img">';
// }

