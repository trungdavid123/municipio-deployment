<?php

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

// Activate debug mode on all environments using ?debug flag. 
if(isset($_GET['debug'])) {
  define('WP_DEBUG', false);
  define('WP_DEBUG_LOG', false);
}

// Activate debug mode on all environments using local.municipio.tech
if(!isset($_GET['debug'])) {
  if($debugDomain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : false) {
    if(strpos($debugDomain, 'local.municipio.tech') !== false) {
      define('WP_DEBUG', false);
    }
  }
}
