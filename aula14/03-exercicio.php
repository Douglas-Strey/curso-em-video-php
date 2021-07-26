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
        function soma()
        {
            $params = func_get_args(); // Pega todos os valores e colcoar dentro de um vetor
            $total = func_num_args(); // Retorna o número de argumentos que foram passados
            $soma = 0;

            for ($i = 0; $i < $total; $i++) {
                $soma += $params[$i];
            }

            return $soma;
        }

        $result = soma(3, 5, 2, 90);

        echo "A soma dos valores é $result.";
        ?>
    </div>
</body>

</html>