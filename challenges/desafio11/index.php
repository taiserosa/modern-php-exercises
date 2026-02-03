<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $porcentagem = $_GET['porcentagem'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?= $preco ?>">
            <label for="porcentagem">Qual será o percentual de reajuste? (<span id="p">?</span>%)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $porcentagem ?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $reajuste = $preco + ($preco * $porcentagem / 100);
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?= number_format($preco, 2, ",", ".") ?>, com <strong><?= $porcentagem ?>% de aumento</strong> vai passar a custar <strong>R$<?= number_format($reajuste, 2, ",", ".") ?></strong>, a partir de agora.</p>
    </section>
    <script>
        // declarações automáticas
        mudaValor()
        function mudaValor() {
            p.innerText = porcentagem.value;
        }
    </script>
</body>
</html>