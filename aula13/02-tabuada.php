<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
       $num = isset($_POST["num"])?$_POST["num"]:1;
       for ($cont=1; $cont <= 10; $cont++) {
           $result = $num * $cont;
           echo "$num x $cont = $result <br/>";
       }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 