<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <form action="01-exercicio.php" method="post">
            Valor: <input type="number" name="v">
            <input type="submit" value="Calcular Raiz">
        </form>

        <?php
            $valor = $_POST["v"];
            $calc = sqrt($valor);

            echo "A raiz de $valor é: ". number_format($calc, 2);
        ?>
    </div>
</body>

</html>