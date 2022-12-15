<?php 

namespace App\Product;

use App\Product;

class Egg extends Product {
    public function __construct($count) {
        parent::__construct('Яйцо', 'шт.', $count);
    }
}