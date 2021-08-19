<?php
session_start();

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
}

if (isset($_POST['email'])) {
    $usuarios = [
        [
            'nome' => 'eric',
            'email' => 'eric@email.com',
            'senha' => '123'
        ]
    ];

    foreach ($usuarios as $user) {
        $emailValido = $email === $user['email'];
        $senhaValida = $senha === $user['senha'];

        if ($senhaValida && $emailValido) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $user['nome'];

            $timeToExpire = time() + 60 * 2;
            setcookie('usuario', $user['nome'], $timeToExpire);

            header('location: index.php');
        }
    }

    if (!isset($_SESSION['usuario'])) {
        $_SESSION['erros'] = ['Usuario ou senha invalidas.'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php if (isset($_SESSION['erros'])) : ?>
        <div>
            <?php foreach ($_SESSION['erros'] as $erro) : ?>
                <p><?= $erro ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <form action="#" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        </div>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>

</html>