<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package heyns_icecream
 */

get_header('404'); ?>

	<section class="fourOhFour">
		<div class="centerContent">
			<h1>Woops! Something went wrong.</h1>
			<a href="<?php echo site_url(); ?>" class="button--lg" onClick="history.go(-1);return true;">TRY GOING BACK :)</a>
		</div>
	</section>

<?php get_footer(); ?>
