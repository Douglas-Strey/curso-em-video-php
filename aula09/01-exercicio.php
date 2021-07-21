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
            $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Nome não informado!";
            $idade = isset($_POST["age"]) ? $_POST["age"] : "Idade não informada!";

            if ($idade >= 18 && $idade < 65) {
                $votar = "Você pode e deve votar!";
                $dirigir = "Você pode dirigir!";
            } elseif ($idade <= 15){
                $votar = "Você não pode votar!";
                $dirigir = "Você não pode dirigir!";
            } elseif ($idade >= 16 && $idade <= 17) {
                $votar = "Você pode votar, mas não é obrigado.";
                $dirigir = "Você não pode dirigir!";
            } elseif ($idade > 65) {
                $votar = "Você pode votar, mas não é obrigado.";
                $dirigir = "Você pode dirigir!";
            }

            echo "Olá $nome, pela sua idade, você possuis as seguintes permissões/restrições: <br/><br/>";
            echo "$dirigir <br>";
            echo $votar;
        ?>

        <a href="../aula09/01-exercicio.html">Voltar</a>
    </div>
</body>

</html>