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
        $x[0] = 4;
        $x[1] = 3;
        $x[2] = 8;
        print_r($x); // Mostra os dados do vetor

        $v2 = array(3, 7, 6, 2, 1, 9);
        print_r($v2);
        var_dump($v2); // Melhor usar esse
        ?>
    </div>
</body>

</html>