<?php

/**
 * Get header
 */
get_header();
?>


<?php
/**
 * Home hero
 */
include(locate_template('template-parts/page/home/header.php'));
include(locate_template('template-parts/page/home/services.php'));

?>


<?php 
/**
 * Get footer
 */
get_footer();
