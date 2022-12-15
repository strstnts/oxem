<?php

namespace App;

use App\Animal\Farm_Animal;
use App\Product;
use App\Util\Printer;

class Farm {
    private $name;
    private $animals = [];
    private $products = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function append_animal(Farm_Animal $animal) {
        array_push($this->animals, $animal);
    }

    public function print_animals_total() {
        $result = [];

        foreach ($this->animals as $animal) {
            $type = $animal->get_type();
            if (!array_key_exists($type, $result)) {
                $result[$type] = 0;
            }
            $result[$type] += 1;
        }

        Printer::print_assoc($result);
    }

    public function append_product(Product $product) {
        array_push($this->products, $product);
    }

    public function release_products() {
        $this->products = [];
    }

    public function print_products_total() {
        $result = [];

        foreach ($this->products as $product) {
            $key = $product->get_type() . ' (' . $product->get_units() . ')';
            if (!array_key_exists($key, $result)) {
                $result[$key] = 0;
            }
            $result[$key] += $product->get_value();
        }

        Printer::print_assoc($result);
    }

    public function get_yield() {
        foreach ($this->animals as $animal) {
            $product = $animal->get_yield();
            $this->append_product($product);
        }
    }
}