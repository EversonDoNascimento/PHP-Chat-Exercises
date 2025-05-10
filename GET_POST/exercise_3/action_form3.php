<?php

if(!empty($_POST['name']) && !empty($_POST['age'])){
    echo $_POST['name']. " ". $_POST['age'];
}else{
    echo "Faltando dados!";
}
