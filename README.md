# Atividade CRUD 01 - Introdução

## Objetivo da Atividade

##### O objetivo desta atividade, a partir do código construído pelo professor em sala de aula, é a análise e a inserção de comentários com o intuito de auxiliar o aluno a interpretar fases do código para a compreensão futura. 

## Tecnologias Utilizadas

##### A principal tecnologia utilizada nesta atividade foi a interação com o banco de dados a partir do php.

## Estrutura Básica dos Arquivos

##### Os arquivos foram divididos em "public", que são de acesso livre para todos e "infra", que engloba pasta "db", local onde está presente o código para a conexão do banco de dados.
## Explicação Geral sobre o Funcionamento do Código

##### O código tem por finalidade permitir o cadastro e visualização de usuários inseridos através da conexão entre php e html.  

## Principais Aprendizados

##### A atividade foi uma breve introdução dos conceitos básicos para a compreensão sobre o banco de dados. Através da explicação do professor, o aluno precisou interpretar o código e adicionar comentários em cima do código criado pelo professor. Através dos comentários, foi possível entender alguns aspectos necessários para a inserção do banco de dados através do PHP, como ligar o código ao banco de dados e visualizar as informações inseridas nele.

# Atividade CRUD 02 - Exclusão e Remoção de Usuários

## Como foi implementado

##### A funcionalidade de exclusão foi implementada através do método "GET". O método "GET" está associado à uma linha de código com o comando "DELETE FROM", que deleta a linha da tabela que esteja associada ao id que o usuário digitar.

## Arquivos

##### Os arquivo que foi alterado nesse processo de exclusão foi a "home.php", local onde se encontra o comando de delete.

## Mensões a trechos

##### O trecho "$sql = "DELETE FROM usuarios WHERE id = '$idUsuario'"" que está localizado na linha 28 do arquivo "home.php" é o principal responsável por receber o id do usuário e deletar todas as informações associadas a ele. Além disso, na linha 80 encontramos o trecho associado ao input de id, local onde é digitado o id que o usuário deseja deletar.

## Dificuldades e soluções

##### A principal dificuldade foi descobrir como associar o banco de dados aos arquivos php, entretanto, lembrando dos comandos que estão associados ao banco de dados, foi possível criar uma relação e criar um meio de exclusão de dados.

## Seção adicional

## Como poderia ser implementado

##### O comando de deletar poderia ter sido criado em um arquivo separado, sendo possível trazê-lo através de um INCLUDE.

## Possíveis arquivos modificados

##### O arquivo home.php é uma sugestão de arquivo que poderia ser modificado.

## Lógica para a exclusão

##### No comando "DELETE FROM usuarios WHERE id = '$idUsuario'"", o comando está deletando da tabela "usuarios" os valores id que estiverem associados ao "$idUsuario". Essa variável está recebendo o id que o usuário digitar no input relacionado ao deletar usuários.

## Pesquisas, testes ou tentativas

##### As tentativas giraram em torno do comando "DELETE FROM", o principal responsável por deletar as informações relacionadas ao usuário. Entretanto, o erro constante foi descobrir o local onde ele deveria se localizar na linha de comandos.