<?php
class Funcionario {

    private $nome;
    private $salarioBase;
    private $horasExtra;
    private $valorDaHora;

    public function setNome($n){
        $this->nome = $n;
    }
    public function setSalarioBase($base){
        $this->salarioBase = $base;
    }
    public function setHorasExtra($extra){
        $this->horasExtra = $extra;
    }
    public function setValorDaHora($valor){
        $this->valorDaHora = $valor;
    }
    public function getSalarioEfetivo(){
        return $this->salarioBase + ($this->horasExtra * $this->valorDaHora);
    }

}