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
            // contagem progressiva
            $c = 1;

            do {
                echo " $c";
                $c++;
            } while ($c <= 20);
        ?>
    </div>
</body>

</html>