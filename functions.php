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

// --- Nav Walker --- 

require_once get_template_directory() . '/functions/lib/class-wp-bootstrap-navwalker.php';

// --- Plugin integrations --- 

require_once get_template_directory() . '/functions/integrations.php';

// --- Include CSS & JavaScript --- 

require_once get_template_directory() . '/functions/cssjs.php';

// --- Search results filter --- 

// require_once get_template_directory() . '/functions/searchfilter.php';

// --- Custom global functions --- 

require_once get_template_directory() . '/functions/globals.php';

// --- HTML Meta --- 

require_once get_template_directory() . '/functions/meta.php';

// --- Custom Post Types & Taxonomies --- 

foreach (glob(get_template_directory() . '/functions/cpt/*.php') as $cpt) { require_once $cpt; };