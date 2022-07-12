<?php
class Venda{
    public $produto;
    public $valor;
    public $status; //pago ou não
    public $tipo_venda;  // a vista ou a prazo
    private $numProd = 0;


    public function imprimir(){
        echo "Venda no valor: " . $this->valor . "<br>" . "<br>";
        for ($i=0; $i<$this->numProd; $i++){
            echo "Produto: " . $this->produtos[$i]->nome . "<br>" . 
            " Valor UN: " . $this->produtos[$i]->valor . "<br>" .
            " QTD: " . $this->produtos[$i]->qtd . "<br>" .
            " Valor Total: " . $this->produtos[$i]->valorT . "<br>" . "<br>";
        }
    }

    public function calcularV(){
        $this->valor = 0;
        for ($i=0; $i < $this->numProd; $i++) { 
            $this->valor += $this->produtos[$i]->valorT;
        }
    }

    public function gerarP(){
        $p1 = new Produto();
        $p1->id = 1;            $p1->nome = "Maçã";        $p1->valor = 2;
        $p1->qtd = 5;           $this->numProd++;               $p1->calcular();

        $p2 = new Produto();
        $p2->id = 2;            $p2->nome = "Cereja";            $p2->valor = 5;
        $p2->qtd = 2;           $p2->calcular();              $this->numProd++;

        $p3 = new Produto();    $p3->id = 3;                    $p3->nome = "Banana";
        $p3->valor = 2;         $p3->qtd = 10;                   $p3->calcular();
        $this->numProd++;

        $p4 = new Produto();    $p4->id = 4;                    $p4->nome = "Melancia";
        $p4->valor = 10;         $p4->qtd = 1;
        $p4->calcular();        $this->numProd++;
    
    $this->produtos[0] = $p1;
    $this->produtos[1] = $p2;
    $this->produtos[2] = $p3;
    $this->produtos[3] = $p4;
    }

}
?>