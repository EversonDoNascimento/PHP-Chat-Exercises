<?php
session_start();
$message = null; 
if(isset($_SESSION["message"])){
  $message = $_SESSION["message"];
  unset($_SESSION["message"]);
}
/*
Exercício 4: Formulário com POST

Crie um formulário HTML com campos para nome, email e idade, 
que envia os dados via POST para o script PHP. Após o envio, 
o PHP deve exibir uma mensagem de confirmação, incluindo os 
dados recebidos.

*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>title</title>
  </head>
  <body>
    <?php if($message):?>
      <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>
    <form action="action_form4.php" method="POST">
      <input type="text" placeholder="name" name="name" />
      <input type="text" placeholder="email" name="email" />
      <input type="number" placeholder="age" name="age" />
      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
