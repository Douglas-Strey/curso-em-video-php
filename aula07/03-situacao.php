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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1+$nota2) / 2;
            
            echo "A média entre a nota 01: $nota1, e a nota 02: $nota2, é: $m";

            $sit = ($m<6) ? "REPROVADO" : "APROVADO";

            echo "<br/>Você está $sit";
        ?>
    </div>
</body>

</html>