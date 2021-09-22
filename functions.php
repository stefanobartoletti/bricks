<?php

/**
 *  https://developer.wordpress.org/themes/basics/theme-functions/
 */

require_once get_template_directory() . '/functions/setup.php'; // --- Theme setup ---

require_once get_template_directory() . '/functions/enqueues.php'; // --- Include CSS & JavaScript ---

require_once get_template_directory() . '/functions/navmenus.php'; // --- Register navmenus ---

require_once get_template_directory() . '/functions/sidebars.php'; // --- Register sidebars ---

require_once get_template_directory() . '/functions/lib/class-wp-bootstrap-navwalker.php'; // --- Nav Walker ---

foreach ( glob( get_template_directory() . '/functions/cpt/*.php' ) as $cpt ) {
	require_once $cpt;
}; // --- Register Custom Post Types & Taxonomies ---

require_once get_template_directory() . '/functions/global.php'; // --- Various global functions ---

require_once get_template_directory() . '/functions/integrations/acf.php'; // --- ACF integration ---

// require_once get_template_directory() . '/functions/integrations/cf7.php'; // --- Contact Form 7 integration ---

// require_once get_template_directory() . '/functions/searchfilter.php'; // --- Search results filter ---

require_once get_template_directory() . '/functions/cleanup.php'; // --- Cleanup ---

require_once get_template_directory() . '/functions/custom.php'; // --- Custom user functions ---
