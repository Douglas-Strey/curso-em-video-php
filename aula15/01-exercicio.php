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
        function teste(&$x) // Passando valores por referência utilizando o &.
        {
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        teste($a);

        echo "<p>O valor de A é $a</p>";
        ?>
    </div>
</body>

</html>