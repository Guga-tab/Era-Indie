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
    <link rel="stylesheet" href="../../css/nintendo.css">
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

      <div class="modulo">
        <img src="https://fs-prod-cdn.nintendo-europe.com/media/images/10_share_images/others_3/indieworld/H2x1_IndieWorld_image1280w.jpg" alt="" id="imgNindie"> 
        <h2 class="titulo"><a href="../nintendo/nintendoIndie.php"> Nintendo Indie World.</a></h2>
        <p class="conteudoIndieWorld">Divulgação dos jogos indie para o Nintendo Switch.</p>
      </div>
        
        <div class="modulo">
            <img src="https://upload.wikimedia.org/wikipedia/en/8/85/Tunic_cover_art.jpg" alt="" id="imgTunic">
            <h2 class="titulo"><a href="../nintendo/tunic.php">TUNIC: game indie Zelda-like está chegando ao Nintendo Switch.</a></h2>
            <p class="conteudotunic">Jogo inspirado em The legend of Zelda é anunciado no Switch.</p>
         </div>

        <div class="moduloalloy">
            <h2 class="titulo"><a href="../nintendo/alloy.php"> Super Alloy Ranger, indie de ação inspirado em clássicos 2D, está em desenvolvimento para o Switch.</a></h2>
            <p class="conteudoalloy">Jogos indie em lançamento no Switch.</p>
            <img src="https://cdn.akamai.steamstatic.com/steam/apps/1944060/extras/Evt_01_11_600x360px_.png?t=1663307419" id="imgRanger">
        </div>


<div class="moduloaside">
    <center>
        <h2 class="asidetitulo">Principais Títulos</h2>
        <a href="https://www.nuuvem.com/br-pt/item/snipperclips-cut-it-out-together" target="_blank"> <img src="https://www.nintendo.com/sg/switch/aexy/img/hero_sp.jpg" alt="cut" id="cut"></a>
        <a href="https://www.nintendo.com/pt-br/store/products/the-binding-of-isaac-afterbirth-plus-switch/" target="_blank"><img src="http://www.nintendoworldreport.com/media/44360/4/1.jpg" alt="isaac" id="isaac"></a>
        </center>
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
    window.alert('Não permitido volte pro Login')
    window.location.href='../../php/login.php';
  </script>";
  
}
?>