<?php

// define theme setting
if (!defined('WP_USE_THEMES')) define('WP_USE_THEMES', true);

// check for installation
if (!is_readable(__DIR__.'/core/wp-blog-header.php')) {
    throw new RuntimeException('Unable to load WordPress; Composer install needed');
}

// load environment and template
require __DIR__.'/core/wp-blog-header.php';
