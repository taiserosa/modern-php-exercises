<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testando os tipos primitivos</h1>
    <?php 
        // 0x - hexadecimal; 0b - binário; 0 - octal
        $num = 010;       // número octal

        echo "O valor da variável é $num <br>"; 
        $v = "Gustavo";
        var_dump($v);    // var_dump informa as informações sobre a variável
        echo "<br>";

        $num = 3e2;      // 3 x 10^2
        echo "O valor é $num ";
        var_dump($num);
        echo "<br>";

        $num = (int) "950";    // coerção (forçar a ser int, no caso)
        var_dump($num);
    ?>
</body>
</html>