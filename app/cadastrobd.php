<?php
echo "<pre>";
print_r($_POST);
print_r($_SERVER['REQUEST_METHOD']);

echo "</pre>";


if($_SERVER['REQUEST_METHOD']=='POST')
{
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    
	require_once("../_conexao/conexao.php");
    try
    {
        $comandoSQL = $pdo->prepare("INSERT INTO `user`(`nomeUser`, `endUser`, `emailUser`, `telUser`, `cpfUser`, `rgUser`, `usuarioUser`, `senhaUser`) VALUE (:nome, :endereco, :email, :telefone, :cpf, :rg, :usuario, :senha)"); 
        $comandoSQL->execute(array(
            ':nome'     =>$nome,
            ':endereco' =>$endereco,
            ':telefone' =>$telefone,
            ':email'    =>$email,
            ':senha'    =>password_hash($senha, PASSWORD_DEFAULT),
            ':cpf'    	=>$cpf,
            ':rg'   	=>$rg,
			':usuario'	=>$usuario
			
			
        ));

        if($comandoSQL->rowCount()>=0)
        {
           echo "<script>alert('Cadastro efetuado com Sucesso!');</script>";
            echo("<meta http-equiv='refresh' content='0; login.php'>");
        }
        else
        {
            echo("ERRO: NO CADASTRO.");
        }
 

    }catch(PDOException $erro)
    {
        echo("ERRO:".$erro->getCode()."<br>");
        echo("MENSAGEM: ".$erro->getMessage());
    }
}