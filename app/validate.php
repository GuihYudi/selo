<?php 

session_start();
		
include("../_conexao/conexao.php");

		// filtrando a entrada do formulário de login
		$usuario   = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$senha   = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		
		try{
			
			$query = $pdo->prepare(
				'SELECT * 
				FROM user 
				WHERE usuarioUser = :usuario');

			$query->execute(array(
				':usuario' =>  $usuario	
  			));
			

			// verifica se Select retorna um valor maior que Zero indicando que achou o usuario
			if($query->rowCount() > 0){
				$usuario = $query->fetch(PDO::FETCH_ASSOC);

				if(password_verify($senha, $usuario['senhaUser']) == false){
					$_SESSION['msg'] = "Usuário e senha incorretos.";	
					header("location:login.php");	
					
				}else{
					echo "<script>alert('Login efetuado com sucesso!');</script>"; 
					header("location:simuladorv2.php");
				
				}

			}else
					{
						$_SESSION['msg'] = "Usuário não encontrado.";
						header("location: login.php?status=erro-senha"); 
					}
				
			
			
		}catch(PDOException $e){
			echo $e->getMessage(); 
		}
