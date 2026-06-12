<?php

    session_start();

    include("infra/db/connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0){
            $_SESSION["usuario"] = $usuario;
            header("Location: public/home.php");
            exit();
        }else{
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <main>

    <h1> Login </h1>

    <form class ="container" method="POST">
        <div class="position-absolute top-50 start-50 translate-middle  shadow p-3 mb-5 bg-body-tertiary rounded text-bg-light p-3 ">
            <h2 class="container text-center mb-4">Login</h2>

        <label>Usuário:</label>
        <input class="container rounded mb-3" size="30" type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input class="container rounded mb-3" size="30" type="password" name="senha">
        <br>
        
        <?php
        
        
            if(isset($erro)){
                echo $erro;
            };

            // esse erro serve ara alguma coisa
        
        ?>
        <br>
        <button  class="container btn btn-primary" type="submit">Entrar</button>
        </div>
    </form>

    </main>
</body>
</html>