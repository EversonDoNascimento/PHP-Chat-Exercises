<?php
session_start();

$error_message = null;
if(isset($_SESSION['user'])){
    unset($_SESSION["user"]);
}
if(isset($_SESSION['login_error'])){
    $error_message = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}

// Crie um sistema de login básico. O formulário de login envia os dados via POST 
// e, se o usuário e a senha estiverem corretos, o PHP deve criar uma sessão e 
// redirecionar para uma página interna. Caso contrário, ele deve exibir uma 
// mensagem de erro.
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Login</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
        if($error_message){
            echo "<script>
                    Swal.fire({
                        title: 'Erro!',
                        text: '$error_message',
                        icon: 'error',
                        confirmButtonText: 'Cool'
                    })
                    </script>";
                }
    ?>
 
    <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Entrar na Conta</h2>

        <form action="action_form8.php" method="POST">
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Senha -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Botão de Login -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">
                Entrar
            </button>
        </form>

        <!-- Link para cadastro -->
        <p class="mt-4 text-center text-sm text-gray-600">
            Não tem uma conta?
            <a href="#" class="text-blue-600 hover:underline">Cadastre-se</a>
        </p>
    </div>

</body>
</html>

