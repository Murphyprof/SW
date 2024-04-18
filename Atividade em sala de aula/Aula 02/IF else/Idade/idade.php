<?php
$idade = $_POST['idade'];


if ($idade < 16){
    echo ("Não pode votar.");
}elseif ($idade < 18 || $idade > 65){
    echo ("Seu voto é facultativo.");
}else{
    echo ("Seu voto é obrigatório.");
}


?>