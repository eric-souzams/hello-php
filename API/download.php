<?php
session_start();

$arquivos = $_SESSION['arquivo'] ?? [];

if (isset($_FILES) && isset($_FILES['arquivo'])) {
    $folder = './files/';
    $nameFile = $_FILES['arquivo']['name'];
    $file = $folder . $nameFile;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $file)) {
        echo 'Arquivo enviado e salvo.';
        $arquivos[] = $nameFile;
        $_SESSION['arquivo'] = $arquivos;
    } else {
        echo 'Error ao enviar e salvar.';
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button type="submit">Enviar</button>
</form>

<ul>
    <?php foreach ($arquivos as $arquivo) : ?>
        <li>
            <a href="./files/<?= $arquivo ?>">
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>