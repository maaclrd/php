<?php
//    var_dump($_POST);
//    var_dump($_FILES);
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // exemplo com operador ternário
        // $idade = (isset($_POST['idade'])) ? $_POST['idade'] : null;

        //No PHP 7 foi instituído o null coalescing operator
        $idade = $_POST['idade'] ?? null;  // se o valor vier nulo ou não existir, vai retornar null;

        if(is_null($idade) || $idade === '') { // == compara valor (nulo e falso);  === compara valor e tipo (string vazia);
            die('Você não informou a idade!');
        }

        $idade = (int)$idade;
        if($idade < 18) {
            die('Você ainda é menor de idade!');
        }


        $idade_string = (string)$idade;
        var_dump($idade_string, $idade);
        echo 'ok, sua idade é '. $idade;
        exit;

    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post"enctype="multipart/form-data">
    <input type="text" name="nome">
    <input type="email" name="email">
    <input type="color" name="color">
    <input type="date" name="date">
    <input type="datetime-local" name="datetime">
    <input type="file" name="file">
    <input type="number" name="number">
    <input type="text" name="idade">
    <br>
    <input type="radio" name="radio" value="valor 1">
    <input type="radio" name="radio" value="valor 2">
    <input type="radio" name="radio" value="valor 3">
    <br>
    <input type="checkbox" name="checkbox" value="checked">
    <br>
    <input type="submit" value="enviar">
</form>
</body>
</html>

