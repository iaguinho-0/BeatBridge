<?php
    /*Para chamar esse arqv, basta por no href do link "sair.php". ex: href="sair.php"*/
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header("Location: loginPage.php");
?>