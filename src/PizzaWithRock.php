<?php

namespace Vantyz\Php4;

require_once 'vendor/autoload.php';

use Vantyz\Php6class2\Pizza;

class PizzaWithRock extends Pizza{

    public function __construct(string $name="Пицца с камнем",string $sauce="Каменный соус",array $toppings=["камень","тесто"])
    {
        parent::__construct($name, $sauce, $toppings);
    }
}