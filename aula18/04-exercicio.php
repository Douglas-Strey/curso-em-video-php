<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <pre>
        <?php
            $vet = array(
                "nome" => "Douglas",
                "idade" => 19,
                "peso" => 85
            );

            foreach ($vet as $key => $val) {
                echo "O campo $key possui o conteúdo $val<br/>";
            }
        ?>
        </pre>
    </div>
</body>

</html>