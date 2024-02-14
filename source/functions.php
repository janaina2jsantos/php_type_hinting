<?php

function calculateImc(int|float $weight, int|float $height)
{
	$imcResult = $weight / ($height * $height);
	return "O seu IMC está em: " . $imcResult;
}
