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
    <link rel="shortcut icon" href="images/star.png">
    <title>BeatBridge</title>
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <header class="navB">
        <div class="navB-content">
          <nav class="nav__bar">
          <a class="text-nav" href="#converter">Transferir</a>
              <a class="text-nav" href="index.html">IA de Playlist</a>
              <a class="text-nav" href="index.html">Comentários</a>
              <a class="text-nav" href="index.html">Sobre nós</a>
              <a class="text-nav" href="#">Assinatura</a>

              <a class="text-nav2" href="#"><img class="user" src="icons/user.png" onclick="toggleMenu()" alt="User"></a>

              <!-- Menu DropDown -->
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                      <img src="icons/user.png" alt="User">
                       <!-- Tentativa de mostrar o nome do usuário logado se estiver logado, e se não estiver logado aparecer "Entrar". Só que tem que usar PHP, dps eu altero isso pra tornar funcional (by: iago)-->
                      <?php
                      if($logado != ""){
                          echo "<h2>$logado</h2>";
                        }/* else{
                          echo "<h2><a href="sair.php" class="sub-menu-link">Entrar </a></h2>";
                        } */
                      ?>  

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
                    <a href="sair.php" class="sub-menu-link">
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

    <div class="box-1">
        <h1>Suas Músicas</h1>  
        <h1>Sempre ao Seu Alcance</h1>
        <p>Converta e gerencie suas playlists de maneira rápida e fácil entre diferentes serviços de streaming. Desfrute de sua música favorita sem interrupções, onde quer que você esteja.</p>

    </div>
    <div class="box-2 d-flex justify-content-center container ">
        <img src="images/gamer.png" alt="img1_gamer">
        <img src="images/casal.png" alt="img2_casal">
        <img src="images/menina.png" alt="img3_menina">
        <img src="images/moca.png" alt="img4_moca"> 
    </div>
    <a  href="#" ><button class="botao1 ">Converta Sua Playlist Agora</button></a>

    <section class="experience_section layout_padding" style="background: #1A0C2A; color: #ffffff;    ">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="img-box">
                <img src="images/Carinha.png" alt="homem-no-celular">
              </div>
            </div>
            <div class="col-md-7">
              <div class="detail-box">
                <div class="heading_container">
                  <h1  style="font-weight: bold;">
                     O QUE FAZ 
                  </h1>
                  <h1  style="font-weight: bold;">
                    O PLAYLIST?
                 </h1>
                </div>
                <p >
                    O Playlist oferece uma solução completa para a conversão de playlists, permitindo que você transfira suas músicas favoritas entre diferentes serviços de streaming com apenas alguns cliques. suporte para plataformas como Spotify, Apple Music, YouTube Music e muitas outras, você tem a flexibilidade de ouvir suas músicas onde e quando quiser. 
                </p>
              </div>
            </div>
    
          </div>
        </div>
      </section>

    <div class="box-1">
      <h1>O Que Os Amantes da Música</h1>
      <h1>Estão Dizendo Sobre a Playlist</h1>
    </div>

    <section class="full-box">
   <div class="avaliacao_box">  
            <div class="box-3">
              <p class="avaliacao">“O Playlist salvou minhas músicas quando mudei de plataforma!”
                <br>
         <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <br>
        <strong>Bill Gates</strong>
              </p>
            </div>
     

        <div class="box-4">
          <p class="avaliacao">“Finalmente um jeito fácil de transferir minhas playlists entre serviços!”
            <br>
         <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <br>
        <strong>Billie Eilish</strong>
          </p>
        </div>
   </div>
   <div class="avaliacao_box">  
     <div class="box-3">
       <p class="avaliacao">“A conversão de playlists nunca foi tão rápida e simples!” 
        <br>
         <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <br>
        <strong>Lionel Messi</strong>
      </p>
       
     </div>
     


     <div class="box-4">
        <p class="avaliacao">“Adorei a interface intuitiva e a segurança do Playlist!”
          <br>
         <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <img src="images/star.png" alt="star">
        <br>
        <strong>Rhianna</strong>
        </p>
      </div>
   </div>
  </section>

  <section class="full-box2">
   <div class="box-1">
    <h1>O Jeito Mais Fácil</h1>
    <h1>De Transferir Suas Playlists</h1>
    <p>Transfira suas playlists favoritas com facilidade e sem complicações entre Spotify, Apple Music, YouTube Music, e muitos outros. Aproveite suas músicas onde quiser, quando quiser.</p>
   </div>
  </section>

  <div class="link-block">
    <div class="block">
      <input class="box-text" type="text" placeholder="Insira a url da sua playlist." /> 
   <a href="#"><button class="botao2">Converter</button></a>
  </div>
</div>

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