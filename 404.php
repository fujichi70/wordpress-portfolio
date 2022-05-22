<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fujichi
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
				<h1 class="page-title"><?php esc_html_e( '申し訳ありません。ページが見つかりませんでした。' ); ?></h1>
		</section>
		
<?php
get_footer();
