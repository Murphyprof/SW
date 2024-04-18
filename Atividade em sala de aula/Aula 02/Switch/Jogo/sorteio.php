<?php
    $sorteio = rand(0,5);
    echo "<p> Resultado do Sorteio: $sorteio </p>";

    switch ($sorteio){
        case 0:
            echo "<p> Você perdeu a sua vez 😞</p>";
            break;
        case 1:
            echo "<p> Avance 1 casa 🙂</p>";
            break;
        case 2:
            echo "<p> Você ganhou um bônus! Avance 3 casas 😁</p>";
            break;
        default:
            echo "<p> Jogue Novamente 😠 </p>";
            break;
    }
        echo '<p><a href="index.html"> Voltar para o Formulário </a></p>';

?>