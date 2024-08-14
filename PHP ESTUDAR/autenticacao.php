<?php
require("conexao.php");

session_start();


$usuario = $_GET["usuario"];
$senha = $_GET["senha"];

# Criptografando uma senha com password_hash

$options = [
    'cost' => '12',
];

$senhaHash = password_hash($senha, PASSWORD_BCRYPT, $options);
    
# Consulta no BD

$consulta = "SELECT * FROM usuarios WHERE 
usuario_usuarios = '$usuario' AND senha_usuarios = '$senha'";

$resultado = $con->query($consulta);
$numrows = $resultado->rowCount();

echo "$numrows";

if ($numrows == 1) {
    echo "<script>window.alert('Login efetuado com sucesso!')</script>";
}
else {
    echo "<script>window.alert('Usuário e/ou senha inválidos.1)</script>";
    return false;
    header("Location: index.html");
}
?>