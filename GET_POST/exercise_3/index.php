<?php
/*

Exercício 3: Parâmetros POST
Crie um script PHP que recebe parâmetros via POST de um 
formulário HTML. O script deve exibir o nome e a idade 
recebidos via POST.

*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form exercise 3</title>
</head>
<body>
    <form action="action_form3.php" method="POST">
        <input type="text" placeholder="name" name="name">
        <input type="number" placeholder="age" name="age">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>