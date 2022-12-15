<?php

namespace App\Animal;

use App\Product\Milk;

class Cow extends Farm_Animal {
    public function __construct() {
        parent::__construct('Корова');
    }

    public function get_yield() {
        parent::check_if_can_yield();

        $count = rand(8, 12);
        $milk = new Milk($count);
        return $milk;
    }
}