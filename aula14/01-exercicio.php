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
        function soma($a, $b)
        {
            $s = $a + $b;

            echo "<p>";
            echo "A soma vale $s";
            echo "</p>";
        }

        soma(3, 4);
        soma(9, 9);

        $x = 9;
        $y = 15;

        soma($x, $y);
        ?>
    </div>
</body>

</html>