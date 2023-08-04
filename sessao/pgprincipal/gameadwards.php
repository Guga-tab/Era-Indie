<?php
 session_start(); 
 include_once('../../classes/usuario.php');
if(isset($_SESSION['id_usuario']))
{
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Era Indie</title>
    <link rel="icon" href="../../img/logo/icone pagina.png">
    <link rel="stylesheet" href="../../css/top5.css">
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
            <li><a href="../menu/xbox.php" id="nav-xbox">Xbox</a></li>
            <li><a href="../menu/nintendo.php" id="nav-nintendo">Nintendo</a></li>
            <li><a href="../menu/playstation.php" id="nav-sony">Playstation</a></li>
            <li><a href="../menu/promo.php" id="nav-promo">Promoções</a></li>
            <li class="login"><a id="login" href="../../php/sair.php">Sair</a></li>
            </ul>
        </div>
      </header>

    <center>  
      <br><br>
      <h1>JOGOS INDIE QUE CONCORRERAM AO THE GAME ADWARDS!</h1>
      <p id = public>Gustavo Machado - 21.10.2022 Às 11H10</p>
      <br><br>

     <div class="TOP5">
        <h2 class="titulo">12 Minutes</h2>
        <p class="conteudo">Twelve Minutes é um jogo eletrônico de aventura desenvolvido por Luís António e publicado pela Annapurna Interactive. Foi lançado em 19 de agosto de 2021 para Microsoft Windows, Xbox One e Xbox Series X/S. Que narra um suspense interativo sobre um homem preso em um looping temporal.</p>
        <a href="https://store.steampowered.com/app/1097200/Twelve_Minutes/" target="_blank"><img src="https://cdn.akamai.steamstatic.com/steam/apps/1097200/capsule_616x353.jpg?t=1660852645" class="imgTOP5"></a>
        <br><br>

     </div>

     <div class="TOP5">
        <h2 class="titulo">Death's Door</h2>
        <p class="conteudo"> Você controla um corvo que ceifa as almas do mortos para conseguir seu ganhapão. Mas isso está prestes a mudar, quando sua alma designada é roubada, e você deve perseguir um ladrão desesperado até um reino intocado pela morte.</p>
        <a href="https://store.steampowered.com/app/894020/Deaths_Door/" target="_blank"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_DeathsDoor_AcidNerve_S1_2560x1440-185f96703b26a44d9a1a092475808553" class="imgTOP5"></a>
        <br><br>
        
     </div>

     <div class="TOP5">
         <h2 class="titulo">Kena: Bridge of Spirits</h2>
         <p class="conteudo">Uma aventura de ação com foco na narrativa, combinando exploração com combates dinâmicos. Desvenda o passado como Kena, uma jovem Guia Espiritual em busca do sagrado Templo da Montanha.</p>
         <a href="https://store.steampowered.com/app/1954200/Kena_Bridge_of_Spirits/" target="_blank"><img src="https://image.api.playstation.com/vulcan/ap/rnd/202101/1401/llxvIbgZ6wgsWRkovO0ZOXd4.jpg" class="imgTOP5"></a>
         <br><br>
        
     </div>

     <div class="TOP5">
         <h2 class="titulo">Inscryption</h2>
         <p class="conteudo"> Inscryption é uma sombria odisseia pavimentada por cartas que mescla roguelike de construção de baralhos, quebra-cabeças no estilo de "escape rooms" e horror psicológico para criar uma amálgama sanguinolenta.</p>
         <a href="https://store.steampowered.com/app/1092790/Inscryption/" target="_blank"><img src="https://cdn.akamai.steamstatic.com/steam/apps/1092790/capsule_616x353.jpg?t=1660265312" class="imgTOP5"></a>
         <br><br>
        
     </div>

     <div class="TOP5">
         <h2 class="titulo">Loop Hero</h2>  
         <p class="conteudo"> O jogador é preso por Lich junto com o mundo em um ciclo atemporal e mergulhou seus habitantes em um caos sem fim. Aumente cada vez mais seu deck de cards místicos e posicione inimigos, estruturas e terrenos ao longo de cada ciclo de expedição.</p> 
        <a href="https://store.steampowered.com/app/1282730/Loop_Hero/" target="_blank"><img src="https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/pt_BR/games/switch/l/loop-hero-switch/hero" class="imgTOP5" ></a>
        <br><br>
        
     </div>
    
    </center>


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