<?php

declare(strict_types=1);
require __DIR__."/vendor/autoload.php";
use Source\Pessoa;



$pessoa = new Pessoa();

echo $pessoa->greetings("Angelina Jolie", 56, 85, 1.75, function($weight, $height) {
    return calculateImc($weight, $height);
});

