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
            $ds = isset($_POST["ds"]) ? $_POST["ds"] : 0;

            switch ($ds) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                case 7:
                case 8:
                    echo "Descanse meu caro aprendiz.";
                    break;
                default:
                    echo "Dia da semana inválido!";
            }
        ?>

        <a href="02-exercicio.html">Voltar</a>
    </div>
</body>

</html>