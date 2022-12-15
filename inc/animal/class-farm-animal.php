<?php

namespace App\Animal;

use App\Countdown;
use App\Util\String_Generator;
use App\Animal;
use App\Animal\Livestock;

abstract class Farm_Animal extends Animal implements Livestock {
    private $id;
    private $latest_yield_day = 0;

    public function __construct($type) {
        parent::__construct($type);
        $this->id = String_Generator::generate();
    }

    public function check_if_can_yield() {
        if ($this->latest_yield_day >= Countdown::get_current_day()) {
            throw new \Exception('Прошло недостаточно времени...');
        }
        $this->do_yield();
    }

    private function do_yield() {
        $this->latest_yield_day = Countdown::get_current_day(); 
    }
}