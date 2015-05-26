<?php
/**
 * This file is part of the Novuso WordPress Framework
 *
 * @copyright Copyright (c) 2015, Novuso. <http://novuso.com>
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @author    John Nickell <https://johnnickell.com>
 */

// define wp core directory name
if (!defined('CORE_DIRNAME')) define('CORE_DIRNAME', 'core');

// define modules directory name
if (!defined('MODULES_DIRNAME')) define('MODULES_DIRNAME', 'app_content');

// define remaining application paths
require __DIR__.'/paths.php';

// autoloader
$autoloader = VENDOR_PATH.'/autoload.php';
if (!file_exists($autoloader)) {
    $message = sprintf('Composer installation required; missing %s', $autoloader);
    throw new RuntimeException($message);
}
require $autoloader;

// check that parameters file exists
if (!is_readable(CONFIG_PATH.'/parameters.php')) {
    throw new RuntimeException('Unable to load configuration parameters');
}

// define configuration parameters
require CONFIG_PATH.'/parameters.php';

// load main configuration
require CONFIG_PATH.'/wordpress.php';
