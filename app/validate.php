<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		
		require_once("_conexao/conexao.php");

		// filtrando a entrada do formulário de login
		$usuario   = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$senha   = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		
		try{
			
			$comandoSQL = $conexao->prepare(
				"SELECT * FROM user WHERE usuarioUser=:usuario");
			
			// trocando o :usuario pelo usuario informado no formulário
			$comandoSQL->bindParam(":usuario", $usuario);
			
			//executando o comando SELECT
			$comandoSQL->execute();

			// verifica se Select retorna um valor maior que Zero indicando que achou o usuario
			if($comandoSQL->rowCount() > 0){

				$linha = $comandoSQL->fetch();

	
					// verifica se a senha é correspondente a cadastrada
					if(password_verify($senha, $hash)){
						// usuario e senha OK cria uma sessão para o trabalho e redireciona para a 
						// página de visualização
						session_start();


						header("location:simulador.php");
					}
					else
					{
						header("location: login.php?status=erro-senha"); 
					}
				
			}
			else{
				header("location:login.php?status=erro-usuario"); 
			}
		}catch(PDOException $e){
			echo $e->getMessage(); 
		}

		// Fechando a conexão com MYSQL
		$conexao = null;
	}// Fechando o IF que valida o POST