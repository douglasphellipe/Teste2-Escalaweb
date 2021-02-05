
		<?php
		
  session_start();

			include_once('conexao.php'); //Faz a verificação com o banco de dados.
			$id_adm = $_POST['id_adm']; //Verifica a variável
			$senha_adm = $_POST['senha_adm'];
			
			$sqlconsulta = "select * from tb_adm where id_adm= '$id_adm' && senha_adm='$senha_adm' LIMIT 1"; // Verifica o banco de dados
			
			$resultado = @mysqli_query($conexao, $sqlconsulta);
			
			if (mysqli_num_rows($resultado)>0){
				$_SESSION['id_adm']=$id_adm;
				$_SESSION['senha_adm']=$senha_adm;
				header("Location: administrador.html");
				
			}else{
				unset ($_SESSION['id_adm']);
				unset ($_SESSION['senha_adm']);
				echo "<br><script type=\"text/javascript\">alert('Usuario Desconhecido');window.location.
          href='login.html'</script>";
				
				
       
			}
			
		
			
		?>