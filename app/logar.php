<?php

    if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){
        
        require_once("_conexao/conexao.php");
        
        $login = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);


    }else{

        header("location: login.php");

    }

?>