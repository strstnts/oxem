<?php

namespace App;

abstract class Animal {
    private $type;

    public function __construct($type) {
        if (!$type) {
            throw new Error('У животного должен быть указан тип.');
        }
        $this->type = $type;
    }

    public function get_type() {
        return $this->type;
    }
}