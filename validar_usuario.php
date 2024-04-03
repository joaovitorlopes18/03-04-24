<?php
require_once('./conexao.php');

$txtLogin = $_POST['txtLogin'];
$txtSenha = $_POST['txtSenha'];

echo "<br />";
echo "Login: $txtLogin, Senha: $txtSenha";


// Verificar se os campos de login e senha não estão vazios
if (!empty($txtLogin) && !empty($txtSenha)) {
    // Consulta SQL para verificar se o login e a senha correspondem aos dados no banco de dados
    $sql = "SELECT * FROM usuarios WHERE login = '$txtLogin' AND senha = '$txtSenha'";
    
    // Executar a consulta
    $resultado = mysqli_query($conexao, $sql);

    // Verificar se a consulta retornou algum resultado
    if (mysqli_num_rows($resultado) == 1) {
        // Login bem-sucedido
        echo "Login bem-sucedido!";
        // Aqui você pode redirecionar o usuário para uma página de boas-vindas ou realizar outras ações
    } else {
        // Login inválido
        echo "Login ou senha inválidos!";
    }
} else {
    // Caso os campos estejam vazios
    echo "Por favor, preencha todos os campos!";
}

?>