<?php 
session_start();
include 'conexao.php'; // Faz a conexão com o Banco

$id_adm = $_SESSION['id_adm']; //Declaração de Variáveis
$senha_adm = $_SESSION['senha_adm'];

$sql = "DELETE FROM tb_adm WHERE id_adm='$id_adm' && senha_adm=('$senha_adm')";  //Irá deletar os dados no Banco
if ($conexao->query($sql) === TRUE) { //Faz a verificação de dados e excluirá o usuário
	echo "<br><script type=\"text/javascript\">alert('Usuário Removido com sucesso!');window.location.
          href='index.html'</script>";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
