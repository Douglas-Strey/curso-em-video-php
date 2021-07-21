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
            $num = isset($_POST["num"]) ? $_POST["num"] : 0;
            $operator = isset($_POST["oper"]) ? $_POST["oper"] : 1;

            switch ($operator) {
                case 1:
                    $result = $num * 2;
                    break;
                case 2:
                    $result = $num ^ 3;
                    break;
                case 3:
                    $result = sqrt($num);
            }

            echo "O resultado da operação solicitada foi $result";
        ?>

        <a href="01-exercicio.html">Voltar</a>
    </div>
</body>

</html>