<?php

$codigo = 600;

switch ($codigo){
    case 200:
    case 300:
        $mensagem = null;
        break;
    case 400:
        $mensagem = "Bad Request";
        break;
    case 500:
        $mensagem = "Erro interno do Servidor";
        break;
    default:
        $mensagem = "Status não encontrado";
        break;
}
    echo $mensagem;

?>