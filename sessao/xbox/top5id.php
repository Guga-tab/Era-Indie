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
        <h1>5 JOGOS INDIE DO XBOX GAME PASS QUE VOCÊ DEVE JOGAR!</h1>
        <p id = public>Gustavo Machado - 18.10.2022 Às 10H45</p>
        <br><br>
  
       <div class="TOP5">
          <h2 class="titulo"> TOP 5 Hollow Knight</h2>
          <p class="conteudo">Hollow Knight é um jogo indie de gênero metroidvania desenvolvido e publicado pela Team Cherry, com gráficos lindos de doer repleto de uma direção de arte atraente que engaja o jogador a jogar e rejogar o game.</p>
          <a href="https://www.xbox.com/pt-BR/games/store/hollow-knight-edicao-coracao-vazio/9MW9469V91LM" target="_blank"><img src="https://cdn.akamai.steamstatic.com/steam/apps/367520/capsule_616x353.jpg?t=1625363925" class="imgTOP5"></a>
          <br><br>
       </div>
  
       <div class="TOP5">
          <h2 class="titulo"> TOP 4 The Gunk</h2>
          <p class="conteudo">The Gunk é um videogame de ação e aventura desenvolvido pela Image & Form e publicado pela Thunderful Publishing. Exploramos localidades deslumbrantes no primeiro trabalho 3D do estúdio sueco Image & Form, que é conhecido pela série SteamWorld, com uma ambientação e visuais notáveis.</p>
          <a href="https://www.xbox.com/pt-BR/games/store/the-gunk/9p008l2ls87f" target="_blank"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgfYspHVbyryNyXn6VFlVBWIqFjGPsA11syBXm8ymvERQu5UjeOr8kaGAJypHMS-qgEtFeMB8FT9c3aLpxwWyfSVPRt2A870pSOs3Cihm3bAbK-I2ghBfr8W7DALECGhm2GqwnXWxPXVYurAd-fCFWWRWFYi8pDhU5WoTCVcmHlBFmZi-jjZpgDwrJ7gA/w1200-h630-p-k-no-nu/the-gunk-capa.jpg" class="imgTOP5"></a>
          <br><br>
       </div>
  
       <div class="TOP5">
           <h2 class="titulo"> TOP 3 Cuphead</h2>
           <p class="conteudo">Um jogo eletrônico de run and gun e plataforma criado pelos irmãos canadenses Chad e Jared Moldenhauer através da Studio MDHR. O jogo foi inspirado no estilo de animação Rubber hose usado em desenhos animados da Era de Ouro da animação americana, como o trabalho dos estúdios Fleischer Studios, Warner Bros. Com uma dificuldade de atcar os nervos ótimo game para quem gosta de um bom desafio.</p>
           <a href="https://www.xbox.com/pt-BR/games/store/cuphead/9NJRX71M5X9P" target="_blank"><img src="https://www.comboinfinito.com.br/principal/wp-content/uploads/2017/11/Cuphead.jpg" class="imgTOP5"></a>
           <br><br>  
       </div>
  
       <div class="TOP5">
           <h2 class="titulo"> TOP 2 The Messenger</h2>
           <p class="conteudo"> Com o genêro de ação-plataforma desenvolvido pela Sabotage Studio e publicado pela Devolver Digital. The Messenger foi lançado em 30 de agosto de 2018 para Microsoft Windows e Nintendo Switch e em 14 de março de 2019 para PlayStation 4. Trazendo gráficos que mesclam entre os 8-bits e os 16-bits com a jogabilidade e dificuldade parecidas com os Ninja Gaiden da época.</p>
           <a href="https://www.xbox.com/pt-BR/games/store/the-messenger/9nnfbw3ngv9k" target="_blank"><img src="https://www.densetsugames.com.br/wp-content/uploads/2018/12/TM_title-screen.jpg" class="imgTOP5"></a>
           <br><br>  
       </div>
  
       <div class="TOP5">
           <h2 class="titulo"> TOP 1 Cris Tales</h2>  
           <p class="conteudo"> Cris Tale é um RPG de estilo japonês (JRPG) desenvolvido por um time colombiano, o que já é bastante interessante por si só. Com um combate que pode se passar em três linhas do tempo diferente, a narrativa mescla algumas histórias da era medieval com a famosa jornada do herói.</p> 
          <a href="https://www.xbox.com/pt-BR/games/store/cris-tales/9P65SVC7S9N7/0010" target="_blank"><img src="https://jogandocasualmente.com.br/wp-content/uploads/2021/08/review_Cristales_switch00.jpg" class="imgTOP5" ></a>
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