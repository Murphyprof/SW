<?php

//$num = 10;

$num = $_GET['num'];

switch (true) {
    case $num > 4:
        $result = $num * 2;
        break;
    case $num <= 4:
        $result = $num + 5;
        break;
    default:
        $result = $num;
        break;
}

    echo "O resultado do cáculo é: " . $result;


?>