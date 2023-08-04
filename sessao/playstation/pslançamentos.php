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
        <h1>JOGOS INDIE EM LANÇAMENTO NO PLAYSTATION 4 e 5!</h1>
        <p id = public>Gustavo Machado - 21.10.2022 Às 11H39</p>
        <br><br>
  
       <div class="TOP5">
          <h2 class="titulo">Sea of Stars</h2>
          <p class="conteudo">Sea of Stars, RPG que combina estética retrô com gameplay moderno, promete ter um sistema de combate acessível de jogabilidade. Com o mínimo de repetição e transições em tempo real entre a exploração, os encontros baseados em turnos prometem prender os jogadores.</p>
          <a href="https://www.playstation.com/pt-br/games/sea-of-stars/" target="_blank"><img src="https://img.youtube.com/vi/2RTEN7E0ggM/maxresdefault.jpg" class="imgTOP5"></a>
          <br><br>
  
       </div>
  
       <div class="TOP5">
          <h2 class="titulo">SIGNALIS</h2>
           <p class="conteudo">SIGNALIS conta a história de uma replika, uma espécie de androide humanoide do regime totalitário de Eusan. Chamada Elster, ela acorda de um estado de criostase e se vê diante de um planeta frio e desconhecido. Conforme explora o lugar, ela irá encontrar criaturas assustadoras e descobrir terríveis segredos.</p>
           <a href="https://www.playstation.com/pt-pt/games/signalis/" target="_blank"><img src="https://psxbrasil.com.br/wp-content/uploads/2022/10/Signalis.jpg" class="imgTOP5"></a>
          <br><br>
          
       </div>
  
       <div class="TOP5">
           <h2 class="titulo">Inscryption</h2>
           <p class="conteudo"> Inscryption é uma sombria odisseia pavimentada por cartas que mescla roguelike de construção de baralhos, quebra-cabeças no estilo de "escape rooms" e horror psicológico para criar uma amálgama sanguinolenta.</p>
           <a href="https://store.playstation.com/pt-br/product/UP3643-PPSA07022_00-3600510866394395" target="_blank"><img src="https://cdn.akamai.steamstatic.com/steam/apps/1092790/capsule_616x353.jpg?t=1660265312" class="imgTOP5"></a>
           <br><br>
          
       </div>
  
       <div class="TOP5">
           <h2 class="titulo">Cult of the Lamb</h2>
           <p class="conteudo"> Cult of the Lamb é um jogo de ação e aventura no estilo rogue-like desenvolvido pelo desenvolvedor indie Massive Monster e publicado pela Devolver Digital. O jogo foi lançado em 11 de agosto de 2022 para macOS, Nintendo Switch, PlayStation 4, PlayStation 5, Windows, Xbox One e Xbox Series X/S.</p>
           <a href="https://www.playstation.com/pt-br/games/cult-of-the-lamb/" target="_blank"><img src="https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/en_US/games/switch/c/cult-of-the-lamb-switch/hero" class="imgTOP5"></a>
           <br><br>
          
       </div>
  
       <div class="TOP5">
           <h2 class="titulo">The Tomorrow Children</h2>  
           <p class="conteudo"> Futuro alternativo, após uma experiência frustrada de unir as mentes de toda a humanidade. O retorno da civilização agora está nas mãos dos Clones de Projeção, novas formas de vida capazes de se aventurar nas profundezas do Vazio em busca de sobreviventes humanos preservados. É aqui que você entra.</p> 
          <a href="https://store.playstation.com/pt-br/concept/10002918" target="_blank"><img src="https://blog.br.playstation.com/tachyon/sites/4/2022/07/121a732bf95a1df389a07c90fc971899035b5bd4.jpg?resize=1088%2C612&crop_strategy=smart" class="imgTOP5" ></a>
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