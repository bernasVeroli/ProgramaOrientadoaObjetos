<?php
require 'funcionario.class.php';

$funcionario = new Funcionario();       // objeto funcionario
$funcionario -> setNome('fulano');      // propriedades
$funcionario -> setSalarioBase('1000');
$funcionario -> setHorasExtra('10');
$funcionario -> setValorDaHora('20');

echo $funcionario->getSalarioEfetivo(); // metodo