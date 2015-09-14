<?php
/**
 * Plugin Name: 03_hiroshimaben
 * Plugin URI: http://www.wbtoyama.org/
 * Description: Make the content hiroshimaben
 * Version: 1.0
 * Author: Yousan_O
 * Author URI: http://www.wbtoyama.org/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if(!function_exists('array_str_replace')) {
    function array_str_replace($subject, $list)
    {
        $targets = array();
        $replaces = array();
        foreach ($list as $target => $replace) {
            $targets[] = $target;
            $replaces[] = $replace;
        }
        return str_replace($targets, $replaces, $subject);
    }
}

add_filter('the_content', function($content) {
    $toyamalist = [
        'やあ' => 'おう',
        '何してるの？' => 'どーしょんにゃー？',
        'じゃん。' => 'かー。',
        'だよ。' => 'じゃわー。',
        'そうなんだ' => 'ほーかー',
        'いいよ' => 'えーでー',

        '来ない？'=> '来ん？',

        '歯がゆい' => 'ぶりはがえぇ',
        'なぁ' => 'のー',
        'どうしたの？' => 'どしたんなら？',
        '殴られた' => 'ぶちまわされた',
        'んだよね' => 'けぇのー',
        '大変' => 'えら',
        'それは' => 'そりゃー',
        'だったね' => 'かったのう',
    ];
    return array_str_replace($content, $toyamalist);
});