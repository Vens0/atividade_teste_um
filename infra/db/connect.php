<?php

    $host = "localhost"; // Servidor da máquina
    $user = "root"; // Usuário do banco de dados
    $pass = "root"; // Senha do banco de dados
    $db = "sistema_simples_m1"; // Banco de dados criado para inserir o cadastro de usuários

    $conn = new mysqli($host,$user,$pass,$db); // Conecta o PHP no MySQL, puxando informações como o local onde o servidor está hospedado (localhost, máquina), o usuário e senha no servidor de banco de dados MySQL (user, pass) e o banco de dados criado (db).

    if($conn->connect_error){ // Caso haja um problema ao conectar o banco de dados,
        die("Erro na conexão!"); // Será gerado a mensagem "Erro de conexão".
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>"; // Caso funcione, exibe a mensagem "Banco conectado com sucesso!"
    };

?>