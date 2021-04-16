<?php
/* Iremos agora ver a variação do comando while, o do while, ele continua usando os parâmetros como o 
if ou seja ele usa uma expressão booleana para sempre retornar o valor verdadeiro.
mas não se engane, o while é uma estrutura da repetição, s laços do-while é muito similar aos laços 
while, com exceção que a expressão de avaliação é verificada ao final de cada iteração em vez de no 
começo.
do{

}while($variavel <= 10)
*/

$i=0;
do {
    echo "$i<br>";
    $i=$i+1;
} while ($i <= 10);

?>