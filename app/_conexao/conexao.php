<?php
  $_dns = "mysql:host=localhost;dbname=bdselo";
  $_usuario = "bdselo";
  $_senha = "bdselo";

  try
  {
    $conexao = new PDO($_dns, $_usuario, $_senha);

  }
   catch(PDOException $erro)
    {
      echo "ERRO: " .$erro->getCode()."<br>"; 
      echo "Mensagem: ". $erro->getMessage();

      //echo "Procure o Administrador do Sistema"; 
    }