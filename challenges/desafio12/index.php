<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $tempo = $_GET['tempo'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="text" name="tempo" id="tempo" min="0" step="1" required value="<?= $tempo ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $tempo;

        $semanas = (int)($sobra / 604800);
        $sobra = $sobra % 604800;

        $dias = (int)($sobra / 86400);
        $sobra = $sobra % 86400;

        $horas = (int)($sobra / 3600);
        $sobra = $sobra % 3600;

        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;

        $segundos = $sobra
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p><?= number_format($tempo, 0, ",", ".") ?> segundos equivalem a um total de:</p>
        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $segundos ?> segundos</li>
    </section>
</body>
</html>