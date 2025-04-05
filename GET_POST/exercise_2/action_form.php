<?php

if(!empty($_GET['name']) && !empty($_GET['email'])){
    echo $_GET['name']. " " .$_GET['email'];
}else{
    echo "faltando dados";
}

