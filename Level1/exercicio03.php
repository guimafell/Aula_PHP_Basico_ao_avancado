<?php
//okay agora vamos calcular
$Num1=2;
$Num2=2;
$Resultado;
// o sinal de igual é o sinal de atribuição

//a tag '<br>' é do html para ser executado no php, temos que coloca-la entre aspas da tag print do php EX: Print '<br>';
//todas as tags do html precisam ser colocadas dessa forma até o momento

//o sinal de cruz (+) é o de soma
$Resultado = $Num1 + $Num2;
Print 'A soma de '.$Num1.' e '.$Num2.' resulta em: '.$Resultado.'<br>';

//o sinal de hifem (-) é o de subtração
$Resultado = $Num1 - $Num2;
Print 'A subtração de '.$Num1.' e '.$Num2.' resulta em: '.$Resultado.'<br>';

//o sinal asterisco (*) é o de multiplicação
$Resultado = $Num1 * $Num2;
Print 'A multiplicação de '.$Num1.' e '.$Num2.' resulta em: '.$Resultado.'<br>';

//O sinal de contra barra (/) é o de divisão
$Resultado = $Num1 / $Num2;
Print 'A divisão de '.$Num1.' e '.$Num2.' resulta em: '.$Resultado.'<br>';

//O sinal de porcentagem (%) resgata o resto da divisão
$Resultado = $Num1 % $Num2;
Print 'O resto de '.$Num1.' e '.$Num2.' resulta em: '.$Resultado.'<br>';

//Quando tu usa parênteses, o php entende que deve primeiro calcular o que está dentro dos parenteses
$Resultado = (($Num1 + $Num2)-$Num1)*$Num2;
Print 'A soma de '.$Num1.' e '.$Num2.' resulta em: '.$Resultado.'<br>';


//Quando tem a ausência de Parenteses o php usa as regras matemáticas ou seja primeiro multiplicação, divisão entre outras operações
$Resultado = $Num1+$Num2-$Num1*$Num2;
Print 'A soma de '.$Num1.' e '.$Num2.' resulta em: '.$Resultado.'<br>';



?>