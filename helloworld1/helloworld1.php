<?php
/**
 * Plugin Name: helloworld1
 */

function helloworld1() {
    return 'Hello World';
}
add_filter('the_content', 'helloworld1');

?>