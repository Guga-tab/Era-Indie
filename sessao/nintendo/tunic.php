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
    <link rel="stylesheet" href="../../css/tunic.css">
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
       
        <div class="modulo">
          <img id="tunicid" src="https://rubberchickengames.com/wp-content/uploads/2022/04/tunic-button-fin-1639003786256.jpg" alt="">
          <h2 class="titulo">TUNIC: game indie Zelda-like está chegando ao Nintendo Switch</h2>
          <p id = public>Gustavo Machado- 18.10.2022 Às 11H40</p>
          <p class="conteudo"> TUNIC teve sua data de lançamento para Switch anunciada na Nintendo Direct.<br> 
            Em 27 de setembro, poderemos jogar com a raposa indie.<br> 
            Desenvolvido solo por Andrew Shouldice, TUNIC é uma aventura inspirada na série<br>
            The Legend of Zelda e nos saudosos manuais que costumavam acompanhar os jogos.<br>
          </p>
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