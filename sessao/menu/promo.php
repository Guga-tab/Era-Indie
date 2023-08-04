<?php
   session_start(); 
   include_once('../../classes/usuario.php');
  if(isset($_SESSION['id_usuario']))
  {
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Era Indie</title>
    <link rel="icon" href="../../img/logo/icone pagina.png">
    <link rel="stylesheet" href="../../css/promo.css">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap-3.3.6-dist/js/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

    <header class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
		       <a href="../index.php"><img src="../../img/logo/logo1-semfundo vermelha-branca.png" alt=""></a>
           <p>A era dos jogos indies é aqui!</p>
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="nav-links">
            <ul>
            <li><a href="xbox.php" id="nav-xbox">Xbox</a></li>
            <li><a href="nintendo.php" id="nav-nintendo">Nintendo</a></li>
            <li><a href="playstation.php" id="nav-sony">Playstation</a></li>
            <li><a href="promo.php" id="nav-promo">Promoções</a></li>
            <li class="login"><a id="login" href="../../php/sair.php">Sair</a></li>
              </ul>
        </div>
      </header>



    <br><br>

     <center>
     <h1 class="titulot">STEAM</h1>
    </center>

     <br><br>

     <div class="modulo">
        <a href="https://store.steampowered.com/app/698670/Scorn/" target="_blank"><img src="https://cdn.cloudflare.steamstatic.com/steam/apps/698670/hero_capsule.jpg?t=1665763396"></a>
        <h2 class="titulo">Scorn</h2>
        <p class="conteudo">Data de lançamento: 14 de out. de 2022</p>
        <p class="conteudog">Genêro: <b>Terror</b></p>
      </div> 

      <div class="modulo">
       <a href="https://store.steampowered.com/app/728880/Overcooked_2/" target="_blank"><img src="https://image.api.playstation.com/vulcan/img/cfn/11307bEskTfSij9cY91PAbL4Asz425G35YGllLqiSPUd_T9kLPLphROTklNtob4UUQntuct-mfXYD75s0WORnivvopUm8mIv.png"></a> 
       <h2 class="titulo">Overcooked! 2</h2>
        <p class="conteudo">Data de lançamento: 7 de ago. de 2018</p>
        <p class="conteudog">Genêro: <b>Culinária</b></p>
     
     </div>

     <div class="modulo">
        <a href="https://store.steampowered.com/app/1332010/Stray/" target="_blank"><img src="https://image.api.playstation.com/vulcan/ap/rnd/202206/0300/E2vZwVaDJbhLZpJo7Q10IyYo.png"></a>
     <h2 class="titulo">Stray</h2>
     <p class="conteudo">Data de lançamento: 19 de jul. de 2022</p>
     <p class="conteudog">Genêro: <b>Cyberpunk</b></p>     
     </div>
     </div>

    <br><br>
     
    <center>
     <h1 class="titulote">Epic games</h1>
    </center>
     
     <br><br>

     <div class="modulo">
        <a href="https://store.epicgames.com/pt-BR/p/it-takes-two" target="_blank"><img src="https://image.api.playstation.com/vulcan/ap/rnd/202012/0815/0Xqi1LgRoEtJ5zlFprpd54Vu.png"></a>
     <h2 class="titulo">It Takes Two</h2>
     <p class="conteudo">Data de lançamento: 25 de mar. de 2021</p>
     <p class="conteudog">Genêro: <b>Aventura</b></p>     
     </div>

     <div class="modulo">
     <a href="https://store.epicgames.com/pt-BR/p/firegirl-29bf39" target="_blank"><img src="https://fs-prod-cdn.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_download_software_1/2x1_NSwitchDS_FiregirlHackNSplashRescueDX_image1600w.jpg"></a>
     <h2 class="titulo">Firegirl: Hack 'n Splash Rescue </h2>
     <p class="conteudofire">Data de lançamento: 14 de dez. de 2021</p>
     <p class="conteudogfire">Genêro: <b>Ação</b></p>     
     </div>

     <div class="modulo">
     <a href="https://store.epicgames.com/pt-BR/p/ultragoodness-2-b9f493" target="_blank"><img src="https://cdn.akamai.steamstatic.com/steam/apps/610130/capsule_616x353.jpg?t=1571426482"></a>
     <h2 class="titulo">UltraGoodness 2</h2>
     <p class="conteudo">Data de lançamento: 2 de set. de 2019</p>
     <p class="conteudog">Genêro: <b>Roguelite</b></p>
     </div>


    <center>
        <footer>
         <div class="rodape">
            <Strong><p>Informações:</p></Strong>
            <p>Email: eraindie5@gmail.com</p>
            <p>Apoio: Etec Centro Paula Souza</p>
          </div>
          <div class="rodape2">
          <Strong><p>Nos siga também nas redes sociais:</p></Strong>
          <p>facebook: @eraindie</p></a>
          <p>Instagram: @eraindie</p></a>
          </div>
          <p class="copy">© Copyright EraIndie 2022 - 2022. todos os direitos reservados.</p>
        </footer>
        </center>
      </body>
      </html>
      <?php
}
else
{
  echo "
  <script>
    window.alert('Não permitido')
    window.location.href='../../php/login.php';
  </script>";
  
}
?>