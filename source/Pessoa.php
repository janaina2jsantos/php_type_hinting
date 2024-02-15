<?php

declare(strict_types=1);

namespace Source;

class Pessoa
{
	public function greetings(string $name, int $age, int|float $weight, int|float $height, CalculaImc $calculaImc): string
	{
		$str =  "Olá {$name}, você tem {$age} anos de idade!" . PHP_EOL;
		$str .= $calculaImc->run($weight, $height);
		return $str;
	}

	public function showSystemInfo(): never
	{
		$info = shell_exec('php -i');
		echo $info;
		exit();
	}
}
