<?php
/*
 * Класс-синглтон для подсчета времени. Для предотвращения 
 * абьюза get_yield у Farm_Animal's
 * 
*/

namespace App;

class Countdown {
    private static $days = 1;

    public static function get_current_day() {
        return self::$days;
    }

    public static function next_day() {
        self::$days = self::$days + 1;
    }
}