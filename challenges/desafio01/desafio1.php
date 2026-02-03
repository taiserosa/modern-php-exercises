<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $numero = $_GET['numero'];
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "O número escolhido foi <strong>$numero</strong>"."<br>";
                echo "O seu <em>antecessor</em> é $antecessor!<br>";
                echo "O seu <em>sucessor</em> é $sucessor!";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>