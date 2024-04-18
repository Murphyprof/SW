<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Include e Require no PHP</title>
</head>
<body>
    <?php
        //Include: gera um erro mas o script continua rodando.
        //Require: erro fatal e o script é encerrado.
        //Caminho relativo: 
        include "olamundo.php";
        //Caminho Absoluto:
        // include "D:/wamp64/www/Bicudo Tarde/Atividade em sala de aula/aula 1";

        //Include_once e Require_once: verifica se o arquivo já foi incluido, em caso afirmativo, não incluirá novamente.
        include_once "olamundo.php";
        require_once "variaveis.php";
    ?>

</body>
</html>