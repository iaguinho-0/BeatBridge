<?php 
  session_start();
  include_once('config.php');
  if((!isset($_SESSION['usuario']) == true)  and (!isset($_SESSION['senha']) == true)){
      unset($_SESSION['usuario']); /*Destruir os dados*/ 
      unset($_SESSION['senha']); 
      header('Location: loginPage.php');
  }
  $logado = $_SESSION['usuario'];

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
    
    <!-- Css do DropDown -->
    <style>.select-menu{
        width: 380px;
        margin: 140px auto;
    }
    .select-menu .select-btn{
        display: flex;
        height: 55px;
        background: #fff;
        padding: 20px;
        font-size: 18px;
        font-weight: 400;
        border-radius: 8px;
        align-items: center;
        cursor: pointer;
        justify-content: space-between;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    .select-btn i{
        font-size: 25px;
        transition: 0.3s;
    }
    .select-menu.active .select-btn i{
        transform: rotate(-180deg);
    }
    .select-menu .options{
        position: relative;
        padding: 20px;
        margin-top: 10px;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 0 3px rgba(0,0,0,0.1);
        display: none;
    }
    .select-menu.active .options{
        display: block;
    }
    .options .option{
        display: flex;
        height: 55px;
        cursor: pointer;
        padding: 0 16px;
        border-radius: 8px;
        align-items: center;
        background: #fff;
    }
    .options .option:hover{
        background: #F2F2F2;
    }
    .option i{
        font-size: 25px;
        margin-right: 12px;
    }
    .option .option-text{
        font-size: 18px;
        color: #333;
    }</style>
 <!-- Css do DropDown -->
  </head>
<body>
  <header class="navB">
    <div class="navB-content">
      <nav class="nav__bar">
      <a class="text-nav" href="sessao.php">Transferir</a>
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
                <a href="perfilPage.php" class="sub-menu-link">
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

     <section class="w-50  rounded-4 " style="height: 85vh; margin: 10px auto 5%;  background: #FAF6FF;">
      <div style="padding-left: 8%; margin-top: 8vh; padding-top: 6%;">
    <div class="" style="">
            <img src="icons/user02.png" alt="user" width="80px">
            <input class="inputSubmit btn text-white" style=" width:40%; background-color: #6827FE; font-weight: bold;" type="submit" name="submit" value="Mudar Foto">
            <input class="inputSubmit btn text-white" style=" width:40%; background-color: #D9D9D9; font-weight: bold;" type="submit" name="submit" value="Apagar Foto">
    </div>
        </div>
        <div class="mb-3">
            <br>
          
            <p class="text-black" style="padding-left: 13%;">NOME DO PERFIL</p>
              <div class="d-flex flex-direction-row">
            <input type="text" class="form-control w-50 " style="margin-left: 13%;" name="nome" id="nome" class="inputUser" value="<?php echo $logado;?>" placeholder="Digite seu novo nome"> 
            <input class="inputSubmit btn text-white" style=" width:20%; font-weight: bold; margin-left: 3%; background: #2CC27B;" type="submit" name="submit" value="Salvar">
        </div>
            <br>
            <p class="text-black" style="padding-left: 13%;">USERNAME</p>

            <div class="d-flex flex-direction-row">
            <input type="text" class="form-control w-50 " style="margin-left: 13%;" name="usuario" id="usuario" value="@<?php echo $logado;?>" placeholder="@username">
            <input class="inputSubmit btn text-white " style=" width:20%; font-weight: bold; margin-left: 3%;background: #2CC27B;" type="submit" name="submit" value="Salvar">
            
        </div>
        <p style="font-size: 12px; color: #000; margin-left: 13%;">Available change in 25/04/2024</p>

        <div class="select-menu mt-5"  >
            <div class="select-btn d-flex flex-direction-row">
                <span class="sBtn-text ">Suas Playlists Transferidas </span>
                <img src="icons/setting.png" alt="" srcset="">
        
            </div>
            <ul class="options">
                <li class="option">
                    <span class="option-text" style="color: #DDCDDA;">Playlist  Vibes da Manhã </span>
                </li>
                <li class="option">
                    <span class="option-text" style="color: #DDCDDA;">Playlist Hits Relaxantes  </span>
                </li>
                <li class="option">
                    <span class="option-text" style="color: #DDCDDA;">Playlist Treino Energético </span>
                </li>
                <li class="option">
                    <span class="option-text" style="color: #DDCDDA;">Playlist Clássicos do Rock </span>
                </li>
                <li class="option">
                    <span class="option-text" style="color: #DDCDDA;">Playlist Chill & Study </span>
                </li>
            </ul>
        </div>
        
            <br>
            <br>
            </div>
     </section>

     <!-- DropDown -->
     <script>const optionMenu = document.querySelector(".select-menu"),
        selectBtn = optionMenu.querySelector(".select-btn"),
        options = optionMenu.querySelectorAll(".option"),
        sBtn_text = optionMenu.querySelector(".sBtn-text");
 selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));       
 options.forEach(option =>{
     option.addEventListener("click", ()=>{
         let selectedOption = option.querySelector(".option-text").innerText;
         sBtn_text.innerText = selectedOption;
         optionMenu.classList.remove("active");
     });
 });</script>

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