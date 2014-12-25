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

return
    [
        ################################################################################
        # Application
        # ------------------------------------------------------------------------------
        # Application settings.
        #
        ################################################################################

        'app'     =>
            [
                'debug'            => TRUE,
                'class'            => 'RawPHP\\RawApplication\\Support\\TestApp',
                'name'             => 'RawFramework',
                'default_language' => 'en_US',
            ],

        ################################################################################
        # Log
        # ------------------------------------------------------------------------------
        # Log settings.
        #
        ################################################################################

        'log'     =>
            [
                'debug'    => TRUE,
                'class'    => 'RawPHP\\RawLog\\Log',
                'log_file' => STORAGE_DIR . 'log.txt',
                'log_name' => 'Log',
            ],

        ################################################################################
        # Error Handler
        # ------------------------------------------------------------------------------
        # Error Handler settings.
        #
        ################################################################################

        'error'   =>
            [
                'debug'              => TRUE,
                'error_callback'     =>
                    [

                        'class'  => 'RawPHP\\RawApplication\\Application',
                        'method' => 'displayError',
                    ],
                'exception_callback' =>
                    [
                        'class'  => 'RawPHP\\RawApplication\\Application',
                        'method' => 'displayError'
                    ],
                'shutdown_callback'  => '',
            ],

        ################################################################################
        # Request
        # ------------------------------------------------------------------------------
        # Request settings.
        #
        ################################################################################

        'request' =>
            [
                'class' => 'RawPHP\\RawRequest\\Request',
                'debug' => TRUE,
            ],

        ################################################################################
        # Router
        # ------------------------------------------------------------------------------
        # Router settings.
        #
        ################################################################################

        'router'  =>
            [
                'class'              => 'RawPHP\\RawRouter\\Router',
                'default_controller' => 'home',
                'default_action'     => 'index',
                'namespaces'         =>
                    [
                        'RawPHP\\RawRouter\\Support\\Controller\\',
                    ],
                'debug'              => TRUE,
            ],

        ################################################################################
        # Session
        # ------------------------------------------------------------------------------
        # Session settings.
        #
        ################################################################################

        'session' =>
            [
                'class'        => 'RawPHP\\RawSession\\Session',
                'handler'      => 'file', // [ 'file', 'php' ]
                'auto_start'   => FALSE,
                'strict'       => TRUE,
                'session_path' => SESSION_DIR . 'session.json',
                'session_id'   => '',
            ],

        ################################################################################
        # Maintenance Mode
        # ------------------------------------------------------------------------------
        # Maintenance mode settings.
        #
        ################################################################################

//        maintenance:
//    debug:      FALSE
//    control:    config
//    controller: home
//    action:     maintain
//    status:     FALSE

        ################################################################################
        # Production Database
        # ------------------------------------------------------------------------------
        # These are the database settings for production|development
        #
        ################################################################################

        'db'      =>
            [
                'debug'   => TRUE,
                'class'   => 'RawPHP\\RawDatabase\\MySql',
                'db_name' => 'raw_framework',
                'db_user' => 'root',
                'db_pass' => '',
                'db_host' => 'localhost',
            ],

        ################################################################################
        # Test Database
        # ------------------------------------------------------------------------------
        # These are the database settings for testing
        #
        ################################################################################

        'test_db' =>
            [
                'debug'   => TRUE,
                'class'   => 'RawPHP\\RawDatabase\\MySql',
                'db_name' => 'raw_framework_test',
                'db_user' => 'root',
                'db_pass' => '',
                'db_host' => 'localhost',
            ],

    ];
