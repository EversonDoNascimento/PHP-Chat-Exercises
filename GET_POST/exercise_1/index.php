<?php
/*
Exercício 1: Parâmetros GET
Crie um script PHP que recebe parâmetros via GET e exibe-os na tela. O script deve pegar os parâmetros da URL e mostrar no formato:
Nome: [nome]


Idade: [idade]


Exemplo: http://localhost/exercicio1.php?nome=Joao&idade=25
*/

if(!empty($_GET['name'])){
    echo $_GET['name'];
}

if(!empty($_GET['age'])){
    echo "<br />". $_GET['age'];
}

