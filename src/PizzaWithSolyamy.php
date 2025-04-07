<?php
namespace Vantyz\Php4;

require_once 'vendor/autoload.php';

use Vantyz\Php6class2\Pizza;

class PizzaWithSolyamy extends Pizza{

    public function __construct(string $name="Пицца с солями",string $sauce="Колбасный соус",array $toppings=["сыр","колбаса","тесто"])
    {
        parent::__construct($name, $sauce, $toppings);
    }
}