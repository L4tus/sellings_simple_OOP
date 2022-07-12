<?php
  include("Venda.php");
  include("Produto.php");

  $vendas[0] = new Venda();
  $vendas[0]->gerarP();
  $vendas[0]->calcularV();
  $vendas[0]->status = "pago";
  $vendas[0]->tipo = 0;    // 0 = a vista

  echo "<br>";
  echo "---------VENDA 1----------" . "<br>"; 
  $vendas[0]->imprimir();

  $vendas[1] = new Venda();
  $vendas[1]->gerarP();
  $vendas[1]->calcularV();
  $vendas[1]->status = "não pago";
  $vendas[1]->tipo = 1;    // 1 = a prazo
  echo "<br>";
  echo "---------VENDA 2----------" . "<br>";
  $vendas[1]->imprimir();

  $vendas[2] = new Venda();
  $vendas[2]->gerarP();
  $vendas[2]->calcularV();
  $vendas[2]->status = "pago";
  $vendas[2]->tipo = 1;    // 1 = a prazo
  echo "<br>";
  echo "---------VENDA 3----------" . "<br>";
  $vendas[2]->imprimir();

  $vendas[3] = new Venda();
  $vendas[3]->gerarP();
  $vendas[3]->calcularV();
  $vendas[3]->status = "pago";
  $vendas[3]->tipo = 0;    // 0 = a vista
  echo "<br>";
  echo "---------VENDA 4----------" . "<br>";
  $vendas[3]->imprimir();

  $vendas[4] = new Venda();
  $vendas[4]->gerarP();
  $vendas[4]->calcularV();
  $vendas[4]->status = "não pago";
  $vendas[4]->tipo = 1;    // 1 = a prazo
  echo "<br>";
  echo "---------VENDA 5----------" . "<br>";
  $vendas[4]->imprimir();

  $vendas[5] = new Venda();
  $vendas[5]->gerarP();
  $vendas[5]->calcularV();
  $vendas[5]->status = "pago";
  $vendas[5]->tipo = 0;    // 0 = a vista
  echo "<br>";
  echo "---------VENDA 6----------" . "<br>";
  $vendas[5]->imprimir();

  echo "<hr>";

  //impressão do tipo de cada venda

  echo "===vendas a prazo===" . "<br>";
for ($i=0; $i < 6; $i++) { 
  if ($vendas[$i]->tipo == 1) {
    $n = $i + 1;
    echo "numero da venda: " . $n . " = a prazo" . "<br>";
  }
}
echo "===vendas a vista===" . "<br>";
for ($i=0; $i < 6; $i++) { 
  if ($vendas[$i]->tipo == 0) {
    $n = $i + 1;
    echo "numero da venda: " . $n . " = a vista" . "<br>";
  }
}

echo "<hr>";


//impressão da situação as vendas a prazo
echo "===vendas a prazo não pagas===";
for ($i=0; $i < 6; $i++) { 
  if ($vendas[$i]->status == "não pago") {
    $n = $i + 1;
    echo "<p style='color:red'> <b><u> A venda $n NÂO FOI PAGA!!!<u> <b> </p>";
  }
}

?>