<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <title>Document</title>
</head>

<body>
    <h1>hello world</h1>
    <?php foreach ($employees as $employee): ?>
        <div><?= $employee['nome'] ?></div>
    <?php endforeach; ?>
</body>

</html>