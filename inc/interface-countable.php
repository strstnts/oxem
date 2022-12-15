<?php
/*
 * Интерфейс для подсчета
 * итогового значения продукции
 * 
*/

namespace App;

interface Countable {
  public function get_value();
}