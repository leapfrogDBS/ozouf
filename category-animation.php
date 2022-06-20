<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ozouf
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
	include(locate_template('template-parts/post/archive/category-archive-body.php'));
	
?>
</main><!-- #main -->		

<?php

get_footer();
