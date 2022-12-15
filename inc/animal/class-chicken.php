<?php

namespace App\Animal;

use App\Product\Egg;

class Chicken extends Farm_Animal {
    public function __construct() {
        parent::__construct('Курица');
    }

    public function get_yield() {
        parent::check_if_can_yield();
        
        $count = rand(0, 1);
        $eggs = new Egg($count);
        return $eggs;
    }
}