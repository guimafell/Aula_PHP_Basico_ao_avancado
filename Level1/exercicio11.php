<?php
//vamos aprender agora sobre arrays.
//vetores ou arrays, qualquer um começa do 0
//isto não é um array, isto é um vetor, vetor = 1 dimensão / array=2 ou mais dimensões. 
$frutas=array("laranja","abacaxi","melancia");
//                0    ,     1   ,     2     ;     
print_r($frutas);

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiest";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco sport";
echo "<br><-----------------------------------------------------------------------------------------> <br>";
echo $carros[0][3]."<br>";
//O comando end() mostra o ultimo item de um array
echo end($carros[1]);
echo "<br><-----------------------------------------------------------------------------------------> <br>";
$pessoas=array();

array_push($pessoas,array(
'nome'=>'João',
'idade'=> 24,
));

array_push($pessoas,array(
    'nome'=>'Felipe',
    'idade'=> 30,
    ));
    print_r($pessoas);
?>