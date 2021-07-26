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
        include "funcoes.php"; // Utilizado para incluir outros arquivos

        echo "<h1>Testando novas funções</h1>";

        ola(); // puxados essa função do arquivo importado
        mostraValor(4);

        echo "<h2>Finalizando Programa...</h2>";
        ?>
    </div>
</body>

</html>