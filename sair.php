
<?php session_start(); 
session_destroy();

	echo "<br><script type=\"text/javascript\">alert('Aguarde um momento, estamos te enviando para a Página Inicial.');window.location.
          href='index.html'</script>";
exit;
		mysqli_close($conexao);
?>