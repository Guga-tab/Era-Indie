<?php
require_once '../classes/usuario.php';
$u = new Usuario;
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
    <link rel="stylesheet" href="../css/login.css">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap-3.3.6-dist/js/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
    <header class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
		       <a href="../index.html"><img src="../img/logo/logo1-semfundo vermelha-branca.png" alt=""></a>
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
				        <li><a href="../menu/xbox.html" id="nav-xbox">Xbox</a></li>
                <li><a href="../menu/nintendo.html" id="nav-nintendo">Nintendo</a></li>
                <li><a href="../menu/playstation.html" id="nav-sony">Playstation</a></li>
                <li><a href="../menu/promo.html" id="nav-promo">Promoções</a></li>
            </ul>
        </div>
      </header>

      <div id="corpo-form-cad">
    <h1>Cadastrar</h1>
    <form method="POST">
     <input type="text" name="nome" placeholder="Nome Usuário" maxlength="30" >
     <input type="email" name="email" placeholder="Email" maxlenght="45">
     <input type="password" name="senha" placeholder="Senha" maxlenght="15" >
     <input type="password" name="confsenha" placeholder="Confirmar Senha" maxlenght="15">
     <input type="submit" value="Cadastrar">
     <a class="cad" href="login.php">Voltar para o <strong>Login</strong></a>
   </form>
   </div>
 
<?php
  //verificar se clicou no botao
  if(isset($_POST['nome']))
  {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confsenha = addslashes($_POST['confsenha']);

    //verificar se esta preenchido
   if(!empty($nome) && !empty($email) && !empty(
      $senha) && !empty($confsenha))
   {
    $u->conectar("epiz_32899361_login_eraindie","sql204.epizy.com","epiz_32899361","OAX0YvTlctxcAZ");
    if($u->$msgErro == "")//se tiver tudo ok
    {
    if($senha == $confsenha){
    if($u->cadastrar($nome,$email,$senha)){
?>
    <div id="msg-sucesso">
    Cadastrado com sucesso! Acesse para entrar!
    </div>

<?php
    }else{
?>
    <div class="msg-erro">
    Email já cadastrado!
    </div> 
<?php
    }
    }else{
?>
    <div class="msg-erro">
    Senha e confirmar senha não correspondem!
    </div>

<?php
    }
    }else{
?>

    <div class="msg-erro">
    <?php echo "Erro: ".$u->$msgErro; ?>
    </div>

<?php
    }
    }else{
?>

    <div class="msg-erro">
    Preencha todos os campos!
    </div>

<?php
     }
  }
?>

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