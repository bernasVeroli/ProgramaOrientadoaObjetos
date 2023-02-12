<?php
$nome = 'fulano';
$salarioBase = 1000;
$horasExtra = 10;
$valorDaHOra = 20;

$salarioEfetivo = $salarioBase + ($horasExtra * $valorDaHOra);

echo $salarioEfetivo;