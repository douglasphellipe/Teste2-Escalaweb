<?php 

include 'conexao.php'; //Faz a conexão com o banco

$nome = $_POST['Nome']; //Declaração de Variáveis
$email = $_POST['Email'];
$mensagem = $_POST['Mensagem'];


$sql = "INSERT INTO tb_forms (Nome, Email, Mensagem)"; //Insere os dados no banco
$sql .= "VALUES('$nome', '$email', '$mensagem')";

if ($conexao->query($sql) === TRUE) {  //Caso o Usuario seja cadastrado ele irá acessar a página
	echo  "Entraremos em contato em breve !";
	header("Location: index.html");
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

