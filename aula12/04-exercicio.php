<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
            // cálculo fatorial;
            $v = isset($_POST["val"]) ? $_POST["val"] : 1;

            echo "<h1>Calculando o fatorial de $v</h1>";

            $c = $v;
            $fat = 1;

            do {
                $fat = $fat * $c;
                $c--;
            } while ($c >= 1);

            echo "<h2>$v ! = $fat</h2>";
        ?>

        <a href="04-exercicio.html">Voltar</a>
    </div>
</body>

</html>