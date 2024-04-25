<?php 

$diasemana = 3;

$dsemana = match($diasemana){
    1 => 'Domingo',
    2 => 'Segunda Feira',
    3 => 'Terça Feira',
    4 => 'Quarta Feira',
    5 => 'Quinta Feira',
    6 => 'Sexta Feira',
    7 => 'Sábado',
    default => 'Dia Inválido',
};

echo "O número $diasemana corresponde a $dsemana.";


?>