<?php
require("conexao.php");

$nome = $_GET['nome'];
$sexo = $_GET['sexo'];
$data = $_GET['nasc'];
$endereco = $_GET['endereco'];
$email = $_GET['email'];
$usuario = $_GET['usuario'];
$senha = $_GET['senha'];

#Preparando inserção no Banco de Dados

$insercao = $con->prepare("INSERT INTO usuarios (nome_usuarios, sexo_usuarios, nasc_usuarios, 
endereco_usuarios, email_usuarios, usuario_usuarios, senha_usuarios) VALUES (:nome, :sexo, :nasc, :endereco, :email, :usuario, :senha)");

$insercao->bindParam(':nome', $nome);
$insercao->bindParam(':sexo', $sexo);
$insercao->bindParam(':nasc', $data);
$insercao->bindParam(':endereco', $endereco);
$insercao->bindParam(':email', $email);
$insercao->bindParam(':usuario', $usuario);
$insercao->bindParam(':senha', $senha);

#Executando a inserção

$insercao->execute();

header("Location: cadastro_sucesso.php");
    exit();
?>