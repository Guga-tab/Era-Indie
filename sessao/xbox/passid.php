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
      <h1>JOGOS INDIE QUE CHEGARAM NO GAME PASS</h1>
      <p id = public>Gustavo Machado - 18.10.2022 Às 11H17</p>
      <br><br>

     <div class="TOP5">
        <h2 class="titulo"> Midnight Fight Express</h2>
        <p class="conteudo">Midnight Fight Express é um beat 'em up isométrico em que acompanhamos a aventura de Cara de Bebê, um agente adormecido que acorda sem memórias em uma cidade dominada pelo crime.</p>
        <img src="https://image.api.playstation.com/vulcan/ap/rnd/202207/2518/Vc1Ilt8esFMbwo2B83CPn1eY.jpeg" class="imgTOP5">
        <br><br>

     </div>

     <div class="TOP5">
        <h2 class="titulo">Moonscars</h2>
        <p class="conteudo">Em Moonscars, cada morte é uma lição e, conforme você vence cada desafio, novas verdades são reveladas. Antes da ascensão, é preciso cair. Transforme-se em uma guerreira impecável por um ciclo de tentativas e vitórias.</p>
        <img src="https://3dnews.ru/assets/external/illustrations/2022/08/11/1071948/0.jpg" class="imgTOP5">
        <br><br>
        
     </div>

     <div class="TOP5">
         <h2 class="titulo">Coral Island</h2>
         <p class="conteudo">Coral Island é uma recriação relaxante e viva de jogos de simulação de fazenda. Seja quem você quiser e curta a vida numa ilha encantadora no seu próprio ritmo.</p>
         <img src="https://cdn.akamai.steamstatic.com/steam/apps/1158160/capsule_616x353.jpg?t=1665556402" class="imgTOP5"></a>
         <br><br>
        
     </div>

     <div class="TOP5">
         <h2 class="titulo">SIGNALIS</h2>
         <p class="conteudo">SIGNALIS conta a história de uma replika, uma espécie de androide humanoide do regime totalitário de Eusan. Chamada Elster, ela acorda de um estado de criostase e se vê diante de um planeta frio e desconhecido. Conforme explora o lugar, ela irá encontrar criaturas assustadoras e descobrir terríveis segredos.</p>
         <img src="https://psxbrasil.com.br/wp-content/uploads/2022/10/Signalis.jpg" class="imgTOP5">
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