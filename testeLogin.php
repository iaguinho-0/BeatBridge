<?php
    session_start();


    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
        //Acessa
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha']; 

        $sql = "SELECT * FROM usuarios WHERE BINARY usuario = '$usuario' AND BINARY senha = '$senha'"; /*Essas consultas vão considerar maiúsculas e minúsculas de forma diferente ao comparar as strings*/

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) { 
            unset($_SESSION['usuario']); /*Destruir os dados caso não tenhamos no nosso Data Base*/ 
            unset($_SESSION['senha']);
            header('Location: login.php');
        }else{
            $_SESSION ['usuario'] = $usuario; /* Efetuar login e direcionar para a página "sistema.php" */
            $_SESSION ['senha'] = $senha;
            header('Location: dentro.php');
        }

    }else{
        //Não Acessa
        header('Location: login.php');
    }
?>