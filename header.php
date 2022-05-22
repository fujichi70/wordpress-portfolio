<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<?php if (is_user_logged_in()) : ?>
		<style type="text/css">
			.header-nav--box {
				position: static;
			}
		</style>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	if (is_home()) :
		$title_tag_start = '<h1 class="site-title">';
		$title_tag_end = '</h1>';
	else :
		$title_tag_start = '<p class="site-title">';
		$title_tag_end =  '</p>';
	endif;
	?>


	<header id="header" class="site-header">

		<?php if (!is_home()) : ?>
			<div class="site-title-box">
				<?php echo $title_tag_start; ?>
				<a href="<?php echo home_url(); ?>">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/kome_c.png">
				</a>
				<?php echo $title_tag_end; ?>
			</div>
		<?php endif; ?>

		<!--スマホメニュー-->
		<div class="sp-menu">
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="mobile-menu">
				<nav>
					<ul class="mobile-menu--parts">
						<li class="mobile-menu--list">
							<a class="mobile-menu--item" href="<?php echo home_url(); ?>">Top</a>
						</li>
						<li class="mobile-menu--list">
							<a class="mobile-menu--item" href="<?php echo esc_url(home_url() . '/profile'); ?>">Profile</a>
						</li>
						<li class="mobile-menu--list">
							<a class="mobile-menu--item" href="<?php echo esc_url(home_url() . '/contact'); ?>">お問い合わせ</a>
						</li>
					</ul>
				</nav>
			</div>
		</div><!-- sp-menu -->

		<!-- PCメニュー -->
		<div class="pc-menu">
			<nav>
				<ul class="pc-menu--parts">
					<li class="pc-menu--list">
						<a class="pc-menu--item" href="<?php echo esc_url(home_url()); ?>"><i class="fas fa-home"></i>Top</a>
					</li>
					<li class="pc-menu--list">
						<a class="pc-menu--item" href="<?php echo esc_url(home_url() . '/profile'); ?>"><i class="fas fa-laptop"></i>Profile</a>
					</li>
					<li class="pc-menu--list">
						<a class="pc-menu--item" href="<?php echo esc_url(home_url() . '/contact'); ?>"><i class="far fa-envelope"></i>お問い合わせ</a>
					</li>
				</ul>
			</nav>
		</div><!-- .pc-menu -->

	</header><!-- #header -->