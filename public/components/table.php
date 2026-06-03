<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3"> <!-- Criação da tabela que engloba os usuários cadastrados -->

    <tr> <!-- Primeira linha que demonstra as informações que serão inseridas para cada usuário -->
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php // Início da estrutura do código em PHP
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios"; // Puxa as informações que estão inseridas na tabela "usuarios"

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){ // Matriz que roda por todos os usuários inseridos até chegar no limite de usuários inseridos. Após chegar no limite, ele para de rodar.

        // A variável "$resultadoTodosUsuarios" recebeu o valor de todos os usuários inseridos. A função do "fetch_assoc" é selecionar cada informação de usuário individualmente, enquanto a variável "$linha" recebe os valores individuais.



       //O echo jogará os valores que a variável "$linha" recebeu e jogará para o usuário conseguir ver as informações."

        echo "  <tr> 
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

    }
    
    ?>

    


</table>