<?php

print_r($_POST);

if (count($_POST) > 0) {
    if (!filter_input(INPUT_POST, "nome")) {
        echo 'Nome é obrigatório' . '<br>';
    }

    if (!filter_input(INPUT_POST, "nascimento")) {
        echo 'Nascimento é obrigatório' . '<br>';
    }

    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if (!$data) {
            echo 'Data deve estar no formato dd/mm/yyyy' . '<br>';;
        }
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Email invalido' . '<br>';
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        echo 'URL invalida' . '<br>';
    }

    $filhosConfig = [
        "options" => [
            "min_range" => 0,
            "max_range" => 30
        ]
    ];

    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] < 0) {
        echo 'Quantidade de filhos invalida' . '<br>';
    }

    $salarioConfig = [
        "options" => [
            "decimal" => ","
        ]
    ];

    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        echo 'Salario invalido' . '<br>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <br>
    <form action="#" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="nascimento">Nascimento</label>
            <input type="text" name="nascimento" id="nascimento">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="site">Site</label>
            <input type="text" name="site" id="site">
        </div>
        <div>
            <label for="filhos">Quantidade de filho</label>
            <input type="number" name="filhos" id="filhos">
        </div>
        <div>
            <label for="salario">Salario</label>
            <input type="text" name="salario" id="salario">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>