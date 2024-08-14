<?php
#Conexão PHP com Banco de Dados método PDO

define("HOST", "localhost");
define("DATABASE", "acervo");
define("USER", "root");
define("PASSWORD", "");
?>

<?php
try{
$con = new PDO("mysql:host=" . HOST .";dbname=" . DATABASE, . USER, . PASSWORD); 
echo "Conexão realizada com sucesso!<br>";
}
catch(PDOException $e){
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado: " . $e->getMessage();
}

?>
<?php

?>