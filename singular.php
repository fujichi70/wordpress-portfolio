<?php
get_header();
?>

<main id="main">
<section id="contact">
	<div class="title">
		<div class="main-title--box">
			<h1 class="main-title">Contact</h1>
			<span class="main-title--sub"><?php the_title(); ?></span>
		</div>
	</div>

	<?php the_content(); ?>

</section>
</main>

<?php get_footer(); ?>