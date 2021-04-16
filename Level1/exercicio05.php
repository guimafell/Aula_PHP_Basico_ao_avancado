<?php
/* vamos entender a estrutura condicional composta
ela é representada pelos comandos if e else com if e else dentro deles
*/ 

$nome="felipe";
$idade=18;
/*o parãmetro aqui é que: se (if) a variável ($nome) for igual (==) a "felipe" então ({}) escreva "o nome está certo"*/
if($nome=="felipe")
{
    if($idade==18){
        echo "o Nome e aidade estão certos está certo";
    }
    else{
        echo "o Nome está certo e a idade errada";
    }
    
}
//senão (else) então ({}) escreva "o nome está errado"
else{

    
    if($idade==18){

        echo "o Nome está errado e a idade certa";
        
    }
    else{
        
        echo "o Nome está errado e a idade também está errada";    
    }
    
}

?>