<?php

session_start();

print_r($_SESSION);

if(!isset($_SESSION['name'])) {
    $_SESSION['name'] = 'Joao Lucas';
}

print_r($_SESSION);

?>

<p>
    <h1>Bom dia, <?= $_SESSION['name'] ?></h1>
</p>

<?php

    $_SESSION['name'] = 'Pedro Santos';

?>

<p>
    <h1>Boa tarde, <?= $_SESSION['name'] ?></h1>
</p>

<?php

    echo session_id() . PHP_EOL;
    // session_id('poem aq um id');

    $count = &$_SESSION['count']; //pega a referencia de memoria
    $count = $count ? $count + 1 : 1;
    echo $count;

    if($_SESSION['count'] % 5 === 0) {
        session_regenerate_id();
    }

    if($_SESSION['count'] === 15) {
        session_destroy();
        header('location: /basic.php');
    }
?>