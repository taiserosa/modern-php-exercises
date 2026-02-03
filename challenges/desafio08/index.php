<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $quadrada = pow($numero, 1/2);  
            $cubica = pow($numero, 1/3);
            echo "Analisando o <strong>número $numero</strong>:<br><ul><li> Sua raíz quadrada é <strong>" . number_format($quadrada, 3, ",", ".") . "</strong></li><li> Sua raíz cúbica é <strong>" . number_format($cubica, 3, ",", ".") . "</strong></li></ul>";
        ?> 
    </section>
</body>
</html>