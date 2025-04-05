<?php
/*

Exercício 2: Formulário com GET
Crie um formulário HTML que envie dados para um script PHP via GET. 
O formulário deve conter campos de nome e email. Após o envio, o 
PHP deve exibir os valores recebidos através da URL.

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form exercise 2</title>
</head>
<body>
    <form action="action_form.php" method="GET">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="email" name="email">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>