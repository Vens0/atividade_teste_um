<?php

session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

include("../infra/db/connect.php");

$id = $_GET["id"];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$resultado = $conn -> query($sql);
$usuario = $resultado -> fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $novoUsuario = $_POST["usuario"];
    $novaSenha = $_POST["senha"];

    $sqlUpdate = " UPDATE usuarios SET usuario = '$novoUsuario', senha = '$novaSenha' WHERE id = $id"; // Recebe o valor do novo nome de usuário inserido e troca pelo usuário antigo. Faz a mesma coisa com a senha.

    if($conn -> query($sqlUpdate) === TRUE){
        header("Location: home.php");
        exit(); // Se a ação da variável "$sqlUpdate" for ativa, o usuário logado será enviado de volta para a página home.
    }


}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<h2>Editar Usuário</h2>
<form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario" value =" <?php echo $usuario['usuario'] ?>"> <!-- Local onde será inserido o novo nome de usuário -->
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" value =" <?php echo $usuario['senha'] ?>"> <!-- Local onde será inserido a nova senha -->
        <br>
        <br>
        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>