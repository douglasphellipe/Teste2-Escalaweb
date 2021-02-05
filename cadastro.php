<?php 

include 'conexao.php'; //Faz a conexão com o banco

$id_adm = $_POST['id_adm']; //Declaração de Variáveis
$senha_adm = $_POST['senha_adm'];

$sql = "INSERT INTO tb_adm (id_adm, senha_adm)"; //Insere os dados no banco
$sql .= "VALUES('$id_adm', '$senha_adm')";

if ($conexao->query($sql) === TRUE) {  //Caso o Usuario seja cadastrado ele irá acessar a página
	echo  "Usuário incluído com sucesso!";
	header("Location: login.html");
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}


