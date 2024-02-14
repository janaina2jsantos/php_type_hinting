<?php

declare(strict_types=1);
namespace Source;
require_once 'source/functions.php';

class Pessoa
{
	public function greetings(string $name, int $age, int|float $weight, int|float $height, callable $calculateImc): string
	{
		$str =  "Olá {$name}, você tem {$age} anos de idade!<br />";
		$str .= $calculateImc($weight, $height);
		return $str;
	}

	public function showSystemInfo(): never
	{
		$info = shell_exec('php -i');
		echo $info;
		exit();
	}
}

