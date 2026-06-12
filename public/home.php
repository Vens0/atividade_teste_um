<?php

include("components/header.php");

include("components/verify.php");

include("../infra/db/connect.php");

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

    <?php
    
    include("components/table.php");

    ?>

</body>
</html>

