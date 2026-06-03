<?php
 
session_start(); // Inicia a sessão
    session_destroy(); // Finaliza a sessão, jogando o usuário para a página de cadastro. A função do "session_destroy" é destuir todos os dados relacionados a sessão do usuário, incapacitando de voltar para outras páginas e o forçando a ir para a página de login ou cadastro.
    header("Location: ../index.php");
    exit();
   
?>