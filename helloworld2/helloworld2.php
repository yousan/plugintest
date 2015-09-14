<?php
/**
 * Plugin Name: helloworld2
 * Plugin URI: http://www.wbtoyama.org/
 * Description: Hello World
 * Version: 1.0
 * Author: Yousan_O
 * Author URI: http://www.wbtoyama.org/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * PHPのバージョンによっては動かないことがあります。その際には下記の書き方にしてください。
 */

add_filter('the_content', function () {
    return 'Hello World2';
});

/**

function helloworld2() {
    return 'Hello World2';
}
add_filter('the_content', 'helloworld2');
*/

?>