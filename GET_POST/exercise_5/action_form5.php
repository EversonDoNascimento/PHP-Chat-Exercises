<?php
session_start();

$data = [
    "name" => filter_input(INPUT_POST, "name"),
    "email" => filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL),
    "password" => filter_input(INPUT_POST, "password")
];

if(!empty($data["name"]) && !empty($data["email"]) && !empty($data["password"])){
    if(strlen($data["name"]) < 3 || strlen($data["password"]) < 6){
        $_SESSION["error"] = "O nome deve ter pelo menos 3 caracteres e/ou a senha deve ter pelo menos 6 caracteres";
        header("location: index.php");
        exit;
    }
    $_SESSION["success"] = "Dados recebidos com sucesso!";


} else{
    $_SESSION["error"] = "Faltando dados no formulário e/ou email inválido";
}

header("location: index.php");
exit;