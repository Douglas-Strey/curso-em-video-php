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
            $a = 3;
            $b = "3";

            $r = ($a == $b) ? "SIM" : "NÃO";
            echo "A variável a é igual a b? $r";
            /* Quando usamos dois iguais vamos verificar se eles são iguais, e quando 
            utilizamos três iguais é para verificar se elas são idênticas. */
        ?>
    </div>
</body>

</html>