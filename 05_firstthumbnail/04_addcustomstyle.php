<?php
/**
 * Plugin Name: 04_addcustomstyle
 * Plugin URI: http://www.wbtoyama.org/
 * Description: Make the content red
 * Version: 1.0
 * Author: Yousan_O
 * Author URI: http://www.wbtoyama.org/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter('wp_head', function(){
    $style = '<style type="text/css">
.hoge {
  color: blue;
}
</style>'."\n";
    echo $style;
});
