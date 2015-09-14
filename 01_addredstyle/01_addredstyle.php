<?php
/**
 * Plugin Name: 01_addredstyle
 * Plugin URI: http://www.wbtoyama.org/
 * Description: Make the content red
 * Version: 1.0
 * Author: Yousan_O
 * Author URI: http://www.wbtoyama.org/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter('the_content', function($content){
    return '<span style="color: red;">'.$content.'</span>';
});
