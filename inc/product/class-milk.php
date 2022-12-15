<?php 

namespace App\Product;

use App\Product;

class Milk extends Product {
    public function __construct($count) {
        parent::__construct('Молоко', 'л.', $count);
    }
}