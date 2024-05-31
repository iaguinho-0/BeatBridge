<?php
    if(isset($_POST['submit'])){
      
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, usuario, senha, cidade, estado) VALUES ('$nome', '$email', '$usuario' ,'$senha', '$cidade', '$estado');");

        header('Location: loginPage.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="shortcut icon" href="images/star.png">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

  </head>
<body>
  <header class="navB">
    <div class="navB-content">
      <nav class="nav__bar">
      <a class="text-nav" href="index.html">Transferir</a>
              <a class="text-nav" href="index.html">IA de Playlist</a>
              <a class="text-nav" href="index.html">Comentários</a>
              <a class="text-nav" href="index.html">Sobre nós</a>
          <a class="text-nav" href="assiantura.html">Assinatura</a>

          <a class="text-nav2" href="#"><img class="user" src="icons/user.png" onclick="toggleMenu()" alt="User"></a>

          <!-- Menu DropDown -->
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                  <img src="icons/user.png" alt="User">
                  <h2><a href="loginPage.php" class="entrar">Entrar</a></h2>
                </div>
                <hr>
                <a href="loginPage.php" class="sub-menu-link">
                  <img src="icons/profile.png">
                  <p>Acessar Perfil</p>
                  <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                  <img src="icons/setting.png">
                  <p>Configurações</p>
                  <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                  <img src="icons/help.png">
                  <p>Ajuda & Suporte</p>
                  <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                  <img src="icons/logout.png">
                  <p>Sair</p>
                  <span>></span>
                </a>
            </div>
            <!-- FIM - Menu DropDown -->
         </div>

      </nav>
   </div>
 </header>

 <form action="cadastroPage.php" method="POST">
     <section class="w-50  rounded-4 " style="height: 742px; margin: 10px auto 5%;  background: #FAF6FF;">
      <div style="padding-left: 10vw; margin-top: 10vh;">
  <div class="mb-3 ">
  <h2 class="" style="color: #1A0C2A; padding-top: 5%; font-weight: bold; font-size:55px;">Cadastre</h2>
  <h2 class="" style="color: #1A0C2A;  font-weight: bold; font-size:55px;">Sua Conta</h2>

  
</div>
<div class="mb-3 ">
  <br>
  <input type="text" class="form-control w-75" name="nome" id="nome" class="inputUser" placeholder="Nome Completo" required>
  <br>
  <input type="text" class="form-control w-75" name="email" id="email" placeholder="E-mail" required>
  <br>
  <input type="text" class="form-control w-75" type="text" name="usuario" id="usuario"  placeholder="Usuário" required>
  <br>
  <input type="password" class="form-control w-75" name="senha" id="senha" placeholder="Senha" required>
<br>

<input type="text" name="cidade" id="cidade" class="form-control w-75"  placeholder="Cidade" required>
<br>
<input type="text" name="estado" id="estado" class="form-control w-75"  placeholder="Estado" required>
<br>
<div class="d-flex f-direction-row" style="gap: 7px;">
  <p style="font-size: large; color: #000;">Já tem uma conta?</p>
    <p style="font-size: large; color: #4285F4; "><a href="cadastroPage.php">Faça login aqui.</a></p>
</div>

</div> 



<input class="inputSubmit btn w-75 text-white" style=" background-color: #6827FE; font-weight: bold;" type="submit" name="submit" value="Enviar">


</div> <!--fim perfil-box-->

</div>
     </section>
    </form>

     <section class="footer">
        <div class="footer-content">
          <hr class="line">
          <p class="p1">Conect-se conosco</p>
          <p class="p2">Fique por dentro das novidades e atualizações do Playlist.</p>
      </div>
        <div class="icons">
          <a href="#"><img src="icons/Facebook.png" alt="facebook-icon"></a>
          <a href="#"><img src="icons/Instagram.png" alt="instagram-icon"></a>
          <a href="#"><img src="icons/TwitterX.png" alt="X-icon"></a>
          <a href="#"><img src="icons/YouTube.png" alt="youtube-icon"></a>
        </div>
        <div class="footer-content">
          <p class="p2">© 2024 Playlist. Todos os direitos reservados.</p>
        </div>
       </section>

          <!-- Função para abrir o menu. Lá encima o botão tem um "onclick", o qual puxa essa função-->
   <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
      subMenu.classList.toggle("open-menu");/* Basicamente chama essa classe la no CSS, o qual faz aparecer o "menu" */
    }
   </script>
</body>
</html>