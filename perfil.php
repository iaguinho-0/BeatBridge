<?php 
  session_start();
  include_once('config.php');

  if((!isset($_SESSION['usuario']) == true)  and (!isset($_SESSION['senha']) == true)){
      unset($_SESSION['usuario']); /*Destruir os dados*/ 
      unset($_SESSION['senha']); 
      header('Location: loginPage.php');
  }
  $logado = $_SESSION['usuario'];

  /*$nomecompleto = $_SESSION['nome'];*/

  $sql = "SELECT * FROM usuarios ORDER BY id DESC";

  $result = $conexao->query($sql);

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
      <a class="text-nav" href="#converter">Transferir</a>
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
                <a href="perfil.php" class="sub-menu-link">
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

     <section class="w-50  rounded-4 " style="height: 65vh; margin: 10px auto 5%;  background: #FAF6FF;">
      <div style="padding-left: 8%; margin-top: 8vh; padding-top: 6%;">
    <div class="" style="">
            <img src="icons/user02.png" alt="user" width="80px">
            <input class="inputSubmit btn text-white" style=" width:40%; background-color: #6827FE; font-weight: bold;" type="submit" name="submit" value="Mudar Foto">
            <input class="inputSubmit btn text-white" style=" width:40%; background-color: #D9D9D9; font-weight: bold;" type="submit" name="submit" value="Apagar Foto">
    </div>
        </div>
        <div class="mb-3 ">
            <br>
            <input type="text" class="form-control w-75 m-auto" name="nome" id="nome" class="inputUser" value="<?php echo $logado;?>" placeholder="Digite seu novo nome">
            <br>
            <input type="text" class="form-control w-75 m-auto" name="usuario" id="usuario" value="<?php echo $logado;?>" placeholder="@username">
            <br>
            <br>

            </div>
     </section>

<!-- Footer -->
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