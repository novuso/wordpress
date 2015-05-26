<?php
/**
 * This file is part of the Novuso WordPress Framework
 *
 * @copyright Copyright (c) 2015, Novuso. <http://novuso.com>
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @author    John Nickell <https://johnnickell.com>
 */

// define theme setting
if (!defined('WP_USE_THEMES')) define('WP_USE_THEMES', true);

// check for installation
if (!is_readable(__DIR__.'/core/wp-blog-header.php')) {
    throw new RuntimeException('Unable to load WordPress; Composer install needed');
}

// load environment and template
require __DIR__.'/core/wp-blog-header.php';
