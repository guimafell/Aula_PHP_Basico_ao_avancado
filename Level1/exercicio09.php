<?php
/* Iremos agora ver o comando while, ele usa os parâmetros como o if
ou seja ele usa uma expressão booleana para sepre retornar o valor verdadeiro.
mas não se engane, o while é uma estrutura da repetição

while($variavel < 10){
    #Código a ser executado
}
*/

$i=0;
while ($i <= 10) {
    echo "$i <br>";
    $i=$i+1;
}

#outra forma de escreve o código while é assim

$i = 0;
while ($i <= 10):
    echo "$i<br>";
    $i=$i+1;
endwhile;

?>