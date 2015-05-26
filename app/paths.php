<?php
/**
 * This file is part of the Novuso WordPress Framework
 *
 * @copyright Copyright (c) 2015, Novuso. <http://novuso.com>
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @author    John Nickell <https://johnnickell.com>
 */

if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__));
if (!defined('APP_PATH')) define('APP_PATH', ROOT_PATH.'/app');
if (!defined('CONFIG_PATH')) define('CONFIG_PATH', APP_PATH.'/config');
if (!defined('PUBLIC_PATH')) define('PUBLIC_PATH', ROOT_PATH.'/public');
if (!defined('CORE_PATH')) define('CORE_PATH', PUBLIC_PATH.'/'.CORE_DIRNAME);
if (!defined('MODULES_PATH')) define('MODULES_PATH', PUBLIC_PATH.'/'.MODULES_DIRNAME);
if (!defined('THEME_PATH')) define('THEME_PATH', ROOT_PATH.'/theme');
if (!defined('VENDOR_PATH')) define('VENDOR_PATH', ROOT_PATH.'/vendor');
if (!defined('BIN_PATH')) define('BIN_PATH', VENDOR_PATH.'/bin');

return [
    'root'    => ROOT_PATH,
    'app'     => APP_PATH,
    'bin'     => BIN_PATH,
    'config'  => CONFIG_PATH,
    'core'    => CORE_PATH,
    'modules' => MODULES_PATH,
    'public'  => PUBLIC_PATH,
    'theme'   => THEME_PATH,
    'vendor'  => VENDOR_PATH
];
