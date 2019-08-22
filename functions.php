<?php

/**
 *  https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 */

// --- Theme setup ---

require_once get_template_directory() . '/functions/setup.php';

// --- Cleanup ---

require_once get_template_directory() . '/functions/cleanup.php';

// --- Register navmenus --- 

require_once get_template_directory() . '/functions/navmenus.php';

// --- Register sidebars --- 

require_once get_template_directory() . '/functions/sidebars.php';

// --- Include third party code --- 

require_once get_template_directory() . '/lib/navwalker/class-wp-bootstrap-navwalker.php';

// --- Include CSS & JavaScript --- 

require_once get_template_directory() . '/functions/cssjs.php';

// --- Search results filter --- 

// require_once get_template_directory() . '/functions/searchfilter.php';

// --- Custom global functions --- 

require_once get_template_directory() . '/functions/globals.php';

// --- Customizer options --- 

require_once get_template_directory() . '/functions/customizer.php';