<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1621.00;
        $salario = $_GET['salario'] ?? $minimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?= $salario ?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?= number_format($minimo, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $resultado = intdiv($salario, $minimo);
            $resto = $salario % $minimo;
            echo "<p>Um salário de R$" . number_format($salario, 2, ",", ".") . " equivale a <strong>" . $resultado . " salários mínimos</strong> + R$" . number_format($resto, 2, ",", ".") . "</p>";
        ?>
    </section>
</body>
</html>