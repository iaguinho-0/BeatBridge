<?php

    $dbHost = 'sql10.freesqldatabase.com';
    $dbUsername = 'sql10710058';
    $dbPassword = 'VcmCSpYK9r'; /*Alterar senha conforme o necesário.*/
    $dbName = 'sql10710058';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  /* Teste de Conexão:
  (já testei e funcionou)

  if($conexao->connect_errno)
    {
      echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
  */
    


?>