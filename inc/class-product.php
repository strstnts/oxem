<?php

namespace App;

use App\Countable;

class Product implements Countable {
    private $type;
    private $unit;
    private $value = 0;
    
    public function __construct($type = '', $unit = '', $value = 0) {
        $this->type = $type;
        $this->unit = $unit;
        $this->value = $value;
    }

    public function get_value() {
        return $this->value;
    }

    public function get_type() {
        return $this->type;
    }

    public function get_units() {
        return $this->unit;
    }
}