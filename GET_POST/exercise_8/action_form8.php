<?php
session_start();
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "password");

$registered_users = [
    [
        "name" => "João",
        "email" => "joao@example.com",
        "password" => "123456"
    ],
    [
        "name" => "Bernardo",
        "email" => "bernardo@example.com",
        "password" => "45678"
    ],
    [
        "name" => "Maria",
        "email" => "maria@example.com",
        "password" => "maria123"
    ],
];

if(!empty($email) && !empty($password)){
    $info_user = [];
    for($i = 0; $i < count($registered_users); $i++){
        if(strtoupper($registered_users[$i]['email']) === strtoupper($email) && strtoupper($registered_users[$i]['password']) === strtoupper($password)){
                array_push($info_user, $registered_users[$i]);
            }
    }

    if(count($info_user) == 1){
        $_SESSION["user"] = $info_user;
        header('location: home.php');
        exit;
    }else{
        $_SESSION["login_error"] = "Usuário não encontrado!";
        header('location: index.php');
        exit;
    }
}
