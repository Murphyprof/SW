<?php 
switch($_POST['anuncio']){
    case 1:
        $mensagem = "Imóvel";
        break;
    case 2:
        $mensagem = "Veículos";
        break;
    case 3:
        $mensagem = "Produtos";
        break;
    case -1:
        $mensagem = "Por favor escolha uma opção";
        break;
    default:
        $mensagem = "Nada foi selecionado ainda";
        break;
}
echo '<h1> Resultado do Anúncio </h1>';
echo '<p>' . $mensagem . '</p>';
echo '<p> <a href="index.html"> Voltar para o formulário </a></p>';



?>