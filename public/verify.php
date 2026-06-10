<?php

session_start(); // Inicia a sessão
if(!isset($_SESSION["usuario"])){ // Verificará se o usuário está logado, e caso não esteja, o usuário será obrigado a acessar a página de login.
    header("Location: ../index.php"); 
    exit();
}

?>