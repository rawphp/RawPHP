<?php

/**
 * This file is part of RawPHP - a PHP Framework.
 *
 * Copyright (c) 2014 RawPHP.org
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * PHP version 5.4
 *
 * @category  PHP
 * @package   RawPHP\RawFramework
 * @author    Tom Kaczocha <tom@rawphp.org>
 * @copyright 2014 Tom Kaczocha
 * @license   http://rawphp.org/license.txt MIT
 * @link      http://rawphp.org/
 */

defined( 'DS' ) || define( 'DS', DIRECTORY_SEPARATOR );

defined( 'ROOT_DIR' ) || define( 'ROOT_DIR', __DIR__ . '/../' );

defined( 'PUBLIC_DIR' ) || define( 'PUBLIC_DIR', ROOT_DIR . 'public/' );

defined( 'CONFIG_DIR' ) || define( 'CONFIG_DIR', ROOT_DIR . 'config/' );

defined( 'RESOURCES_DIR' ) || define( 'RESOURCES_DIR', ROOT_DIR . 'resources/' );

defined( 'VIEWS_DIR' ) || define( 'VIEWS_DIR', RESOURCES_DIR . 'views/' );

defined( 'LANG_DIR' ) || define( 'LANG_DIR', RESOURCES_DIR . 'lang/' );

defined( 'STORAGE_DIR' ) || define( 'STORAGE_DIR', ROOT_DIR . 'storage/' );

defined( 'CACHE_DIR' ) || define( 'CACHE_DIR', STORAGE_DIR . 'cache/' );
defined( 'LOGS_DIR' ) || define( 'LOGS_DIR', STORAGE_DIR . 'logs/' );
defined( 'SESSION_DIR' ) || define( 'SESSION_DIR', STORAGE_DIR . 'session/' );
defined( 'VIEWS_CACHE_DIR' ) || define( 'VIEWS_CACHE_DIR', STORAGE_DIR . 'views/' );

function raw_get_root_dir() { return ROOT_DIR; }
function raw_get_public_dir() { return PUBLIC_DIR; }
function raw_get_config_dir() { return CONFIG_DIR; }
function raw_get_resources_dir() { return RESOURCES_DIR; }
function raw_get_views_dir() { return VIEWS_DIR; }
function raw_get_lang_dir() { return LANG_DIR; }
function raw_get_storage_dir() { return STORAGE_DIR; }
function raw_get_cache_dir() { return CACHE_DIR; }
function raw_get_logs_dir() { return LOGS_DIR; }
function raw_get_session_dir() { return SESSION_DIR; }
function raw_get_views_cache_dir() { return VIEWS_CACHE_DIR; }
