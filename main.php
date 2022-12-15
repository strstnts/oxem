<?php

use App\Farm;
use App\Animal\Chicken;
use App\Animal\Cow;
use App\Countdown;

require_once('./autoload.php');


$uncle_farm = new Farm('Uncle Tom\'s fun farm');

// 1. First init farm
echo '1. Добавляем 10 коров и 20 кур...' . PHP_EOL;
for ($i = 0; $i < 10; $i++) {
    $uncle_farm->append_animal( new Cow() );
}
for ($i = 0; $i < 20; $i++) {
    $uncle_farm->append_animal( new Chicken() );
}

// 2. Get animals info
echo PHP_EOL. '2. Количество каждого типа животных на ферме' . PHP_EOL;
echo $uncle_farm->print_animals_total();

// 3. Get yields 7th times
echo PHP_EOL. '3. Производим 7 раз (неделю) сбор продукции' . PHP_EOL;
for ($i = 0; $i < 7; $i++) {
    try {
        $uncle_farm->get_yield();
    } catch (Exception $e) {
        // Do nothing?
    }  

    Countdown::next_day();
}

// 4. Print info about products...
echo PHP_EOL. '4. Общее кол-во собранных за неделю шт. яиц и литров молока' . PHP_EOL;
echo $uncle_farm->print_products_total();

$uncle_farm->release_products();


// 5. Buy new animals
echo PHP_EOL. '5. Покупаем новых животных (5 куриц и 1 корова)' . PHP_EOL;
for ($i = 0; $i < 5; $i++) {
    $uncle_farm->append_animal( new Chicken() );
}

$uncle_farm->append_animal( new Cow() );

// 6. Get animals info
echo PHP_EOL. '6. Информацию о количестве каждого типа животных на ферме' . PHP_EOL;
echo $uncle_farm->print_animals_total();

// 7. Get yields 7th times
echo PHP_EOL. '7. Снова производим 7 раз (неделю) сбор продукции' . PHP_EOL;
for ($i = 0; $i < 7; $i++) {
    try {
        $uncle_farm->get_yield();
    } catch (Exception $e) {
        // Do nothing?
    }  

    Countdown::next_day();
}

// 8. Print info about products...
echo PHP_EOL. '8. Результат' . PHP_EOL;
echo $uncle_farm->print_products_total();