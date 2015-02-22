<?php 
/**
* Author: Najeem M Illyas
*/
/*
 * Index.php is where the application starts initiating the application
 * 
 */
define('DEBUG', false);
define('MODULAR', true); //this is mandatory to enable modular. Both modular and non-modular won't work together
define('ROUTES_ENABLED', true);
define('THEME_PATH', '/layout/theme/'); //do not change this
define('ACTIVE_THEME', 'urbanic');
include 'engine/kernal/Illyasinit.php';

?>