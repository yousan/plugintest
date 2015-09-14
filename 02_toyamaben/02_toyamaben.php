<?php
/**
 * Plugin Name: 02_toyamaben
 * Plugin URI: http://www.wbtoyama.org/
 * Description: Make the content toyamaben
 * Version: 1.0
 * Author: Yousan_O
 * Author URI: http://www.wbtoyama.org/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

function array_str_replace($subject, $list){
    $targets = array();
    $replaces = array();
    foreach ($list as $target => $replace) {
        $targets[] = $target;
        $replaces[] = $replace;
    }
    return str_replace($targets, $replaces, $subject);
}

add_filter('the_content', function($content) {
    $toyamalist = [
        '何してるの？' => '何しとんがけ？',
        'じゃん。' => 'やん。',
        'だよ。' => 'だわ。',
        '行かない？' => '',
        'いいよ' => 'ええよ',

        '来ない？'=> '来ん？',

        '歯がゆい' => 'はがやしい',
        'どうしたの？' => 'どしたんけ？',
        ''
    ];
    return array_str_replace($content, $toyamalist);
});