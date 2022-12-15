<?php
/*
 * Интерфейс для "функционала"
 * домашний животных – сбор яиц и молока.
 * 
*/

namespace App\Animal;

interface Livestock {
  public function get_yield();
}