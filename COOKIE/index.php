<?php
session_start();

if (isset($_COOKIE['usuario'])) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if (!isset($_SESSION['usuario'])) {
    header('location: login.php');
}

echo $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <div>
        <a href="/logout.php">Sair</a>
    </div>

</body>
</html>