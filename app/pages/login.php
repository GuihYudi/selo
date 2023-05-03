<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../_img/icon.png" type="image/png">
    <title>SELO - Login</title>
    <link rel="stylesheet" href="../../css/style_login.css">
</head>
<body>
<form action="../validate.php" method="POST">
    <div class="main-login">
        <div class="left-login">
            <img src="../../_img/logo.png" class="left-login-image" alt="logotipo">
        </div>
        <div class="right-login">
        
            <div class="card-login">
                <h1>LOGIN</h1>
                
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                </div>
                <button class="btn-login">Login</button>
                <p class="danger">

             <?php
                if (isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
      ?>
</p>
            </div>
        </div>
    </div>
</body>
</html>