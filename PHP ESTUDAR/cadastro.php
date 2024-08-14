<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cadastre-se</h1>
    </header>
    <section>
        <form action="incluirdados.php" method="get">
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="idnome"><br>
            <label for="sexo">Sexo</label><br>
            <select name="sexo" id="idsexo" class="meu-select">
                <option value="Masculino" selected>Masculino</option>
                <option value="Feminino">Feminino</option>
            </select><br>
            <label for="data">Data de Nascimento</label><br>
            <input type="date" name="nasc"><br>
            <label for="endereço">Endereço</label><br>
            <input type="text" name="endereco" id="idendereco"><br>
            <label for="email">E-mail</label><br>
            <input type="text" name="email" id="idemail"><br>
            <label for="usuario">Usuário</label><br>
            <input type="text" name="usuario" id="idusuario"><br>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha" id="idsenha"><br>
            <button type="submit">Cadastrar</button>
        </form>
    </section>
    
</body>
</html>