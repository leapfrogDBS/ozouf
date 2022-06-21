<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ozouf
 */

get_header();
?>
<main id="primary" class="site-main">
<?php
	include(locate_template('template-parts/post/single/post-content.php'));
?>
</main><!-- #main -->		


<?php

get_footer();
