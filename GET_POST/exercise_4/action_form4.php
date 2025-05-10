<?php
session_start();

$data = [
    "name" => filter_input(INPUT_POST, "name"),
    "email" => filter_input(INPUT_POST, "email"),
    "age" => filter_input(INPUT_POST, "age"),
];

if(!empty($data['name']) && !empty($data["email"]) && !empty($data["age"])){
  $_SESSION["message"] = "Dados recebidos com sucesso";
}

header("location: index.php");
exit;