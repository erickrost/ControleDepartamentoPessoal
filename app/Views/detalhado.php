<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/createRead.css">
    <title>Cadastrar</title>
</head>
<header>
    <h1>Departamento Pessoal</h1>
    <div id="user">
        <div id="img"></div>
        <p>Usuário 1</p>
    </div>
</header>

<div id="wrapper">
    <div id="leftSide">
        <img src="" alt="">
        <?php foreach ($employees as $employee): ?>
            <h1><?= $employee['nome'] ?></h1>
        </div>

    </div>
<?php endforeach; ?>

<body>

</body>

</html>