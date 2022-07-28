<?php
function fujichi_setup()
{
	load_theme_textdomain('fujichi', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus([
		'header_nav' => 'ヘッダーナビゲーション',
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

// ファヴィコン追加
function add_favicon()
{
	echo '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/img/kome_c.png" type="image/x-icon" />' . "\n";
}

add_action('wp_head', 'add_favicon');

function my_script()
{
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array());
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Zen+Kurenaido&family=M+PLUS+1:wght@300&family=Kiwi+Maru&family=Permanent+Marker&family=Playball&family=Kaisei+Opti&display=swap', false);
	wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
	wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js');
	wp_enqueue_script('intersection', get_template_directory_uri() . '/js/intersection.js');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js');
	
	// if (is_front_page()) {
	// }
}

add_action('wp_enqueue_scripts', 'my_script');
