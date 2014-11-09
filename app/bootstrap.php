<?php

// define wp core directory name
if (!defined('CORE_DIRNAME')) define('CORE_DIRNAME', 'core');

// define modules directory name
if (!defined('MODULES_DIRNAME')) define('MODULES_DIRNAME', 'app_content');

// define remaining application paths
require __DIR__.'/paths.php';

// autoloader
require VENDOR_PATH.'/autoload.php';

// check that parameters file exists
if (!is_readable(CONFIG_PATH.'/parameters.php')) {
    throw new RuntimeException('Unable to load configuration parameters');
}

// define configuration parameters
require CONFIG_PATH.'/parameters.php';

// load main configuration
require CONFIG_PATH.'/wordpress.php';
