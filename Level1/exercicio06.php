<?php

/*agora a estrutura condicional pelo switch
a estrutura dele é SWITCH(parâmetro){
    case:
        break;
    defalt:
        break;
}
*/
$mes=13;

switch($mes){
    case 1:
        echo 'mês '.$mes.' é janeiro';
        break;
        case 2:
            echo 'mês '.$mes.' é fevereiro';
            break;
            case 3:
                echo 'mês '.$mes.' é março';
                break;
                case 4:
                    echo 'mês '.$mes.' é abriu';
                    break;
                    case 5:
                        echo 'mês '.$mes.' é maio';
                        break;
                        case 6:
                            echo 'mês '.$mes.' é junho';
                            break;
                            case 7:
                                echo 'mês '.$mes.' é julho';
                                break;
                                case 8:
                                    echo 'mês '.$mes.' é agosto';
                                    break;
                                    case 9:
                                        echo 'mês '.$mes.' é setembro';
                                        break;
                                        case 10:
                                            echo 'mês '.$mes.' é outubro';
                                            break;
                                            case 11:
                                                echo 'mês '.$mes.' é novembro';
                                                break;
                                                case 12:
                                                    echo 'mês '.$mes.' é dezembro';
                                                    break;
                                                    default:
                                                    echo 'mês inexistente';
                                                    break;

}
?>