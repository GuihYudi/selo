<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../_img/icon.png" type="image/png">
    <title>SELO - Cadastro</title>
    <link rel="stylesheet" href="../css/style_cadastro.css">
</head>
<body>
<div class="main-login">
        <div class="left-login">
            <img src="../_img/logo.png" class="left-login-image" alt="logotipo">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>CADASTRO</h1>
				<form action="cadastrobd.php" method="POST">
                <div class="textfield">
                    <label for="nome">NOME</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div class="textfield">
                    <label for="endereco">ENDEREÇO</label>
                    <input type="text" name="endereco" id="endereco">
                </div>
                <div class="textfield2">
					<div class="left">
						<label for="email">EMAIL</label>
						<input type="email" name="email" id="email">
					</div>
					<div class="right">
						<label for="telefone">TELEFONE</label>
						<input type="text" name="telefone" id="telefone">
					</div>
                </div>
                <div class="textfield2">
                    <div class="left">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf">
                    </div>
                    <div class="right">
                        <label for="rg">RG</label>
                        <input type="text" name="rg" id="rg">
                    </div>
                </div>
				<div class="textfield2">
					<div class="left">
						<label for="usuario">USUÁRIO</label>
						<input type="text" name="usuario" id="usuario">
					</div>
					<div class="right">
						<label for="senha">SENHA</label>
						<input type="password" name="senha" id="senha">
					</div>
				</div>
                <input class="btn-login" type="submit" value="CADASTRAR">
            </div>
        </div>
    </div>
     
</body>