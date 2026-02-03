<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_atual = date("Y");
        $ano_nasc = $_GET['ano_nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $ano_atual;
    ?>
    <main>
        <h1>Calculando a sua Idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" min="1900" max="<?= ($ano_atual - 1) ?>" value="<?= $ano_nasc ?>">
            <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <?= $ano_atual ?>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?= $ano ?>">
            <input type="submit" value="Calcular Idade">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $ano_nasc;
        ?>
        <p>Quem nasceu em <?= $ano_nasc ?> vai ter <strong> <?= $idade ?> anos</strong> em <?= $ano ?>!</p>
    </section>
</body>
</html>