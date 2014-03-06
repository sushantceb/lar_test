<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(
    // 'js' => array('//js/file1.js', '//js/file2.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),
    'maincss' => array(
                    '//css/bootstrap-custom.min.css',
                    '//css/font-awesome.min.css',
                    '//css/launched.css',
                    '//css/launched-responsive.css'
                ),
    'mainjs' => array(
                    '//js/jquery-1.10.2.min.js'
                )
);
