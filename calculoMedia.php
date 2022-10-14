<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        h1 {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 30px;
    }
    p {
        margin-top: 20px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 16px;
    }
    </style>
</head>
<body>
   <?php
    $nome = $_GET ['nome'];
    $nota1 = $_GET ['nota1'];
    $nota2 = $_GET ['nota2'];

    $media = ($nota1 + $nota2) / 2;
    $situacao = " ";

    if ($media < 4){
        $situacao = "Reprovado";
    } else if ($media >= 4 && $media <6) {
        $situacao = "Exame Final";
    } else {
        $situacao = "Aprovado";
    }
?> 
    <h1>Resultado</h1>
    <p>Nome: <?php echo $nome ?></p>
    <p>Média: <?php echo $media ?></p>
    <p>Situação: <?php echo $situacao ?></p>

</body>
</html>

