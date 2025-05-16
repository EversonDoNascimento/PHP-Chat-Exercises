<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_FILES["files"]) && $_FILES['files']['error'] === UPLOAD_ERR_OK){
        $file = $_FILES["files"];

        if(strpos($file['type'], "image") !== false){
            $_SESSION['message'] = "Imagem recebida com sucesso!";
        }else{
            $_SESSION['message'] = "Imagem não foi enviada!";
        }
    }
    header("Location: index.php");
    exit;
}