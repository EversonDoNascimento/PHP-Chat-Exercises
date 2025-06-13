<?php
session_start();
$user_info;
if(isset($_SESSION["user"])){
   $user_info = $_SESSION["user"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Home</title>
</head>
<body>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-800">Meu Site</h1>

            <nav class="space-x-6 hidden md:flex">
                <a href="#" class="text-gray-600 hover:text-blue-600">Início</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Sobre</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Contato</a>
            </nav>
           <?php
                if(isset($user_info)){
                    echo "
                        <div class='flex w-56 gap-2 h-14 bg-slate-200 flex justify-between items-center px-4'>
                            <div class='w-11 h-11 bg-slate-400 rounded-full'></div>
                            <div class='flex-1 flex flex-col'> ".
                                "<span class='max-w-36 overflow-x-hidden text-sm'>".$user_info[0]['name']."</span>".
                                "<span class='max-w-36 overflow-x-hidden text-sm'>".$user_info[0]['email']."</span>"
                            ."</div>
                        </div> "
                   ;
                }else{
                    echo "<a href='index.php' class='bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition'>Entrar</a>";
                }
           ?>
        </div>
    </header>
</body>
</html>