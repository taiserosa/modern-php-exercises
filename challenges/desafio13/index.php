<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" step="5" required value="<?= $valor ?>">
            <p style="font-size: 0.6em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
        <?php 
            $resto = $valor;
            $cem = (int)($resto / 100);
            $resto %= 100;

            $cinq = (int)($resto / 50);
            $resto %= 50;

            $dez = (int)($resto / 10);
            $resto %= 10;

            $cinco = (int)($resto / 5);
        ?>
    <section>
        <h2>Saque de R$<?= number_format($valor, 2, ",", ".") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:
            <ul>
                <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?= $cem ?></li>
                <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?= $cinq ?></li>
                <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?= $dez ?></li>
                <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?= $cinco ?></li>
            </ul>
        </p>
        
    </section>
</body>
</html>