<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){ // O método POST receberá as informações do usuario e senha e enviará essas informações para as variáveis "$novoUsuario" e "$novaSenha".
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha']; 

    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  // O "INSERT INTO" será responsável por jogar essas informações na query SQL."

    if($conn->query($sql) === TRUE){ // Caso a inserção de novo usuário funcione, exibirá uma mensagem de sucesso."
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>"; // Caso não funcione, uma mensagem de erro."
    }

}










?>