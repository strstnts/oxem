<?php

namespace App\Util;

class Printer {
    public static function print_assoc($arr) {
        $str = '';
        foreach ($arr as $key => $value) {
            $str .= $key . ': ' . $value . PHP_EOL;
        }
        $str .= PHP_EOL;

        echo $str;
    }
}