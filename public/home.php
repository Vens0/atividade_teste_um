<?php

include("public/components/header.php");

include("verify.php");

include("../infra/db/connect.php");

include("addusuarios.php")

if($_SERVER["REQUEST_METHOD"] == "GET"){ // O método POST receberá as informações do usuario e senha e enviará essas informações para as variáveis "$novoUsuario" e "$novaSenha".
   $idUsuario = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = '$idUsuario'"; 

    if($conn->query($sql) === TRUE){ // Caso a inserção de novo usuário funcione, exibirá uma mensagem de sucesso."
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>"; // Caso não funcione, uma mensagem de erro."
    }

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    <form method="POST"> <!-- Botão de cadastro de novo usuário utilizando o método POST. O método POST recebe as informações do novo usuário. -->
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <label>Confirmar Senha:</label>
        <input type="password" name="confirmar">
        <br>
        <button type="submit">Cadastrar</button> 

    </form>

    <hr>
    <?php
    
    include("components/table.php")

    ?>

    <h4> Deletar Usuários. </h4>

     <form method="GET">

     <input type="apagar" name="id">

        <button type="submit"> Digite o ID </button> 

    </form>

<script src="scripts/confirm.js"></script>

</body>
</html>

