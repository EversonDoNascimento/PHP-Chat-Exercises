<?php
/*

Exercício 5: Validação de Dados com POST
Crie um formulário HTML com os campos nome, email e senha. Envie os dados via POST para um script PHP que valida as entradas:
O nome deve ter pelo menos 3 caracteres.


O email deve ser válido (use filter_var).


A senha deve ter pelo menos 6 caracteres.


Se algum dado for inválido, o script deve mostrar uma mensagem de erro.

*/

session_start();

$success = null;
$error = null;
if(isset($_SESSION["success"])){
    $success = $_SESSION["success"];
    unset($_SESSION["success"]);  
}

if(isset($_SESSION["error"])){
     $error = $_SESSION["error"];
     unset($_SESSION["error"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Exercise 5</title>
</head>
<body>
    <?php if($success): ?>
        <div>
            <p><?= $success ?></p>
        </div>
    <?php endif; ?>
    <?php if($error): ?>
        <div>
            <p><?= $error ?></p>
        </div>
    <?php endif; ?>
    <form action="action_form5.php" method="POST">
      <input type="text" placeholder="name" name="name" />
      <input type="text" placeholder="email" name="email" />
      <input type="password" placeholder="password" name="password" />
      <input type="submit" value="Enviar" />
    </form>
</body>
</html>