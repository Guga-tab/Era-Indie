<?php
 session_start(); 
 include_once('../classes/usuario.php');
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
    <link rel="icon" href="../img/logo/icone pagina.png">
    <link rel="stylesheet" href="../css/estilologado.css">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap-3.3.6-dist/js/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
    <header class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
		       <a href="index.php"><img src="../img/logo/logo1-semfundo vermelha-branca.png" alt=""></a>
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
				    <li><a href="../sessao/menu/xbox.php" id="nav-xbox">Xbox</a></li>
            <li><a href="../sessao/menu/nintendo.php" id="nav-nintendo">Nintendo</a></li>
            <li><a href="../sessao/menu/playstation.php" id="nav-sony">Playstation</a></li>
            <li><a href="../sessao/menu/promo.php" id="nav-promo">Promoções</a></li>
            <li class="login"><a id="login" href="../php/sair.php">Sair</a></li>
            </ul>
        </div>
      </header>

    
    <h2 class="titulo2">ULTIMAS NOTÍCIAS</h2>
     <br><br>

    <div class="modulo">
        <h2 class="titulo"><a href="pgprincipal/bgs.php">5 jogos indies que fizeram sucesso na BGS 2022</a></h2>
        <p class="conteudo">jogos indie divulgados na bgs com a presença dos criadores.</p>
        <img src="https://escutai.com/wp-content/uploads/2022/05/bgs-2022-ingressos-1-1024x1024.jpg" alt="bgs">
    </div>
    <br><br>

    <div class="modulo">
        <h2 class="titulo"><a href="xbox/passid.php"> Jogos Indie Que chegaram no Game Pass</a></h2>
        <p class="conteudo">Jogos indie em lançamento no Game Pass.</p>
        <img src="https://sm.ign.com/ign_br/screenshot/default/xbox-game-pass-jogos-indie-lancamento_4p3a.png" id="imgGamePass">
    </div>
    <br><br>

    <div class="modulojim">
        <h2 class="titulo"><a href="playstation/ceops.php"> Jim Ryan, o atual CEO da Sony Interactive <br>Entertainment, retoma o interesse em jogos indie.</a></h2>
        <p class="conteudojim">Chefão da sony apoia os jogos indie.</p>
        <img src="https://static.gamevicio.com/imagens_up/big/80/sony-esta-tao-preocupada-com-call-of-duty-que-enviou-jim-ryan-para-se-reuniu-com-os-reguladores-da-uniao-europeia-079602.jpg" id="imgJim">
    </div>
    <br><br>

    <h2 class="titulo2">CURIOSIDADES INDIE</h2> 

    <div class="moduloadwards">
        <h2 class="titulo"><a href="pgprincipal/gameadwards.php">Conheça os Jogos Indie que concorreram aos <br> The game Adwards!</a></h2>
        <p class="conteudoad">Evento de premiações anuais de jogos do ano!</p>
        <img src="https://kanto.legiaodosherois.com.br/w760-h398-gnw-cfill-q95/wp-content/uploads/2021/11/legiao_hi4tc2NlYRSn.jpg.webp" id="imgAdwards">
    </div>

     <br><br>
    <h2 class="titulo2">DESTAQUES</h2>
     <br><br>

    <div class="modulo">
            <h3 class="titulo"><a href="public.php">Publique aqui o seu game Indie!</a></h3>
    </div>

    <br><br>

    <div class="modulo">
     ...
    </div>

    <br><br>

    <div class="modulo">
      ...
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
    window.location.href='../php/login.php';
  </script>";
  
}
?>