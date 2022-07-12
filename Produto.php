<?php
class Produto{
    public $id;
    public $nome;
    public $valor;
    public $qnt;
    public $valorT;

    public function calcular(){
        $this->valorT = $this->valor * $this->qtd;
        }

}
?>