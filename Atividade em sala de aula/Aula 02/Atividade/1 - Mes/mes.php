    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número do mês do formulário
        $numero_mes = $_POST["numero_mes"];

        // Verifica se o número do mês está dentro do intervalo válido
        if ($numero_mes >= 1 && $numero_mes <= 12) {
            // Array com os nomes dos meses
            $nomes_meses = [
                "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
                "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
            ];

            // Obtém o nome do mês com base no número informado
            $nome_mes = $nomes_meses[$numero_mes - 1];

            // Exibe o resultado
            echo "<p>O número $numero_mes corresponde ao mês de $nome_mes.</p>";
        } else {
            // Exibe uma mensagem de erro se o número do mês estiver fora do intervalo válido
            echo "<p>Erro: Por favor, informe um número de 1 a 12.</p>";
        }
    }
    ?>

