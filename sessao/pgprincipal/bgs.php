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
      <h1>5 JOGOS INDIE QUE FIZERAM SUCESSO NA BGS 2022</h1>
      <p id = public>Gustavo Machado - 21.10.2022 Às 10H33</p>
      <br><br>

     <div class="TOP5">
        <h2 class="titulo"> TOP 5 Parallel</h2>
        <p class="conteudo">O jogador explora diferentes mundos, civilizações destruídas, ambientes místicos e cenas de destruição que estão entre os cenários visitados, em primeira pessoa. No game do desenvolvedor Rodrigo Banzato, as decisões também importam, com as escolhas e atitudes tomadas interferindo no enredo.</p>
        <a href="https://store.steampowered.com/app/1388350/Parallel/?l=portuguese#:~:text=Parallel%20é%20um%20jogo%20de%20ação%20e%20aventura%20RPG%20em,cenas%20claustrofóbicas%20e%20de%20destruição." target="_blank"><img src="https://cdn.akamai.steamstatic.com/steam/apps/1388350/header.jpg?t=1665047276" class="imgTOP5"></a>
        <br><br>

     </div>

     <div class="TOP5">
        <h2 class="titulo"> TOP 4 Fractured Sanity</h2>
        <p class="conteudo"> Game de realidade virtual que fez os jogadores tremerem de medo na bgs, por seu genêro de terror com uma inspiração direta em franquias como Resident Evil e Silent Hill, o que por si só, já faz merecer uma visita.</p>
        <a href="https://store.steampowered.com/app/1954840/Fractured_Sanity/" target="_blank"><img src="https://cdn.akamai.steamstatic.com/steam/apps/1954840/header.jpg?t=1660928326" class="imgTOP5"></a>
        <br><br>
        
     </div>

     <div class="TOP5">
         <h2 class="titulo"> TOP 3 NVDA</h2>
         <p class="conteudo"> NVDA conta a história de Hugo, um estudante que está prestes a concluir o ensino médio e passa pelo dilema de todo jovem: vestibular. Ele sonha em produzir um filme e precisa decidir entre seguir seu sonho ou cursar algo que garanta uma estabilidade financeira.</p>
         <a href="--" target="_blank"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgbU0audQAfBzMvvMtwwS_E3oL81PMs36m_deGiDwg7o_xXZZNI-Xq9C5ymsHTz0i9cRBXjV3G7Bk4AJOkIBoT5VsFojiV8WxLmGnYsAPj5RQ5clAhpPGZfuIwFzubEAyStB49Asl47qPiXgpez6ZbBjaMnLW63wCVl0Jeo-E1LWVMrn4nkKgodVq-W1A/w1200-h630-p-k-no-nu/nvda-steam.jpg" class="imgTOP5"></a>
         <br><br>
        
     </div>

     <div class="TOP5">
         <h2 class="titulo"> TOP 2 Donut Arena</h2>
         <p class="conteudo"> Rogue-lite com foco no combate,. Você controla um gladiador que precisa lutar contra outras pessoas a fim de agradar o rei. Com o progresso, ganha donuts, cuecas (sim, seu personagem começa pelado, como veio ao mundo), armaduras e armas novas. Se você desagradar o rei, ele pode lhe punir com mais dificuldades e armadilhas.</p>
         <a href="https://store.steampowered.com/app/880870/Donut_Arena/" target="_blank"><img src="https://cdn.cloudflare.steamstatic.com/steam/apps/880870/capsule_616x353.jpg?t=1665309338" class="imgTOP5"></a>
         <br><br>
        
     </div>

     <div class="TOP5">
         <h2 class="titulo"> TOP 1 Feelings</h2>  
         <p class="conteudo"> Jogo de plataforma 3D com foco na exploração e na resolução de puzzles. Você joga com a Sara, uma jovem que, acompanhada pelo seu pequeno dragão voador Toothbun, precisa explorar várias ilhas enquanto tenta se reencontrar consigo mesma.</p> 
        <a href="https://store.steampowered.com/app/1793580/Feelings/" target="_blank"><img src="https://cdn.akamai.steamstatic.com/steam/apps/1793580/header.jpg?t=1665202247" class="imgTOP5" ></a>
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