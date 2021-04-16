<?php
/*agora vamos fazer a segunda estrutura de repetição, o foreach.
foreach ($variable as $indice => $valor_atribuído_de_$variable)
*/
$meses=array(
"Janeiro","Fevereiro","Março",
"Abril", "Maio","Junho",
"Julho","Agosto","Setembro",
"Outubro","Novembro","Dezembro"
);
/*
primeira forma do foreach
*/
foreach ($meses as $mes) {
    $i=$i+1;
    echo "o mês é: $i-$mes <br>";
}

/*
segunda forma do foreach
*/
foreach ($meses as $i => $mes) {
    $i=$i+1;
    echo "o mês é: $i-$mes <br>";
}

?>