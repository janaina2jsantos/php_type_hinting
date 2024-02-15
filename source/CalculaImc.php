<?php

declare(strict_types=1);

namespace Source;

class CalculaImc
{
	public function run(int|float $weight, int|float $height)
	{
		$imcResult = $weight / ($height * $height);
		return "O seu IMC está em: " . $imcResult . PHP_EOL;
	}
}
