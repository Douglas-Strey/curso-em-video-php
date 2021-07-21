<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <form action="02-exercicio.php" method="post">
            Nome: <input type="text" name="nome"><br>
            Ano de Nascimento: <input type="number" name="ano"><br>
            <fieldset><legend>Sexo</legend>
                <input type="radio" name="sexo" id="masc" value="homem" checked>
                <label for="masc">Masculino</label><br>
                <input type="radio" name="sexo" id="fem" value="mulher">
                <label for="fem">Feminino</label><br>
            </fieldset>
            <input type="submit" value="Enviar">
        </form>

        <?php
            $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Não informado!";
            $nascimento = isset($_POST["ano"]) ? $_POST["ano"] : "Não informado!";
            $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "Não informado!";

            $idade = (date("Y") - $nascimento);
            echo "$nome é $sexo e tem $idade anos.";
        ?>
    </div>
</body>

</html>