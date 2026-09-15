<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form method="post" action="">
        <h2>Cadastro</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="number" name="ano_nascimento" required><br>

        <button type="submit">Cadastrar</button>
    </form>
<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $ano_de_nascimento = $_POST['ano_nascimento'];
    $idade = date('Y') - $ano_de_nascimento;

    if ($idade >= 18) {
    // Código para salvar no log_acessos.txt
    // Exibir "Acesso permitido, [Nome]!"
    echo "<p>Acesso permitido, $nome.</p>";

    $arquivo = fopen('log_acessos.txt', 'a');

    // Cria uma linha com o nome e a senha separados por ";"
    $linha = '$nome, ano_de_nascimento\n';   

    // Escreve a linha no arquivo
    fwrite($arquivo, $linha);

    // Fecha o arquivo
    fclose($arquivo);
    // echo "<p>Usuário cadastrado com sucesso!</p>";

    } else {
        // Exibir "Acesso negado, [Nome]!"
        echo "<p>Acesso negado, $nome.</p>";
    }
}
?>
</body>
</html>