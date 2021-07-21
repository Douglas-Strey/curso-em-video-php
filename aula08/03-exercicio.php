<!DOCTYPE html>
<html>

<head>
    <?php
        $txt = isset($_POST["t"]) ? $_POST["t"] : "Texto Genérico";
        $tam = isset($_POST["tam"]) ? $_POST["tam"] : "12pt";
        $cor = isset($_POST["cor"]) ? $_POST["cor"] : "#000000";
    ?>

    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>

    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>

<body>
    <div>
        <form action="03-exercicio.php" method="post">
            <label for="itxt">Texto: </label>
            <input type="text" name="t" id="itxt"> <br>
            <label for="itam">Tamanho</label>
            <select name="tam" id="itam">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt">14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select> <br>
            <label for="icor">Cor: </label>
            <input type="color" name="cor" id="icor"> <br>
            <input type="submit" value="Gerar">
        </form>

        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
    </div>
</body>

</html>