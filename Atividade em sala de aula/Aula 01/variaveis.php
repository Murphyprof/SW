<?php
echo"### Linguagem de tipagem dinâmica ###";

$minha_var = ""; //null
$texto = "Ola Mundo"; //string
$verdadeira = true; //boolean

echo "<p>", $minha_var, "</p>";
echo "<p>", $texto, "</p>";
echo "<p>", $verdadeira, "</p>";

//Diferença entre "" e ''
//"" - permite colocar variáveis pegando seu valor.
//'' - entede que será digitado um texto.

$nome = 'ETEC';
$sobrenome = 'Antonio';
$sobrenome1 = 'Devisate';
$nome_completo = 'Escola -->'.'$nome $sobrenome $sobrenome1';

echo $nome_completo;

//Matando a variável
unset($nome_completo);
//chamando a variável morta
echo $nome_completo;

?>