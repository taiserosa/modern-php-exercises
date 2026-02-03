<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 005 - Analisador de número real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php 
            $real = $_GET['numreal'] ?? 0;

            $inteiro = (int)$real;
            $fracao = $real - $inteiro;

            echo "Analisando o número <strong>" . number_format($real, 3, ",", ".") . "</strong>:<br>";
            echo "<ul><li> A parte inteira é igual a <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li> <li> A parte fracionária é igual a <strong>" . number_format($fracao, 3, ",", ".") . "</strong></li></ul><br>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>