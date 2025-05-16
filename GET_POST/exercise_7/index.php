<?php
session_start();
//  Crie um formulário HTML que permita ao usuário enviar um arquivo
//  de imagem via POST. O PHP deve receber o arquivo e fazer a verificação
//  para garantir que ele seja uma imagem válida. O script deve mostrar
//  uma mensagem informando se o envio foi bem-sucedido ou não.

$message = null;
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($message): ?>
        <div>
            <p><?= $message ?></p>
        </div>
    <?php endif; ?>
    <form action="action_form7.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files" ></input>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>