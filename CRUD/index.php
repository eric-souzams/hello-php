<?php
    if(isset($_GET['error']) && $_GET['error'] == 'injection') {
        echo "<marquee> Você é um bobão </marquee>";
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="./resources/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin #inputEmail {
            margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin #inputPassword {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

</head>

<body class="text-center">

    <form class="form-signin" method="POST" action="app/Controllers/UserController.php">
        <h1 class="h3 mb-3 font-weight-normal">Fazer Login</h1>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>

        <input type="hidden" name="userController" value="login">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

        <div class="alert alert-danger">
            <?php
                if(isset($_GET['error']) && $_GET['error'] == "validation") {
                    echo "Cara deu problema no registro.";
                }
            ?>
        </div>

        <a href="register.php" class="alert-link" target="_blank" rel="noopener noreferrer">Criar uma conta</a>
    </form>

</body>

</html>