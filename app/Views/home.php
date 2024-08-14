<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <title>Controle DP</title>
</head>

<body>

    <header>
        <h1>Departamento Pessoal</h1>
        <div id="user">
            <img src="usuario">
            <p>Usuário 1</p>
        </div>
    </header>

    <div id="content">
        <section>
            <p>Controle de Funcionários</p>
            <button>Cadastrar Funcionário</button>
        </section>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Admissão</th>
                    <th>Salario</th>
                    <th>Detalhado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td><?= $employee['nome'] ?></td>
                        <td><?= $employee['cargo'] ?></td>
                        <td><?= $employee['admissao'] ?></td>
                        <td><?= $employee['salario'] ?></td>
                        <td><button>...</button></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>

</html>