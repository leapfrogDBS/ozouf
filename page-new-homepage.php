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
<style>
    #services-topper {
        display: none;
    }
</style>

<?php 
/**
 * Get footer
 */
get_footer();

