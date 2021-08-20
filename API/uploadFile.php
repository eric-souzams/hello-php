<?php

print_r($_FILES);

if ($_FILES && $_FILES['arquivo']) {
    $folder = './';
    $nameFile = $_FILES['arquivo']['name'];
    $file = $folder . $nameFile;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $file)) {
        echo 'Arquivo enviado e salvo.';
    } else {
        echo 'Error ao enviar e salvar.';
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button type="submit">Enviar</button>
</form>