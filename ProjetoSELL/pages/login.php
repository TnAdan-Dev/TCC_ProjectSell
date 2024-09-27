<?php
  session_start();
  if (isset($_SESSION['idcliente'])) {
    header('Location: ../index.php'); 
    exit;
  } 

  include '../backend/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conexao = novaConexao();

    // Busca o usuário pelo e-mail
    $stmt = $conexao->prepare("SELECT id_cliente, cli_senha FROM tbl_cliente WHERE cli_email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifica se a senha hashada bate com a senha fornecida
        if ($senha = $usuario['cli_senha']) {
            // Senha correta, inicia a sessão
            $_SESSION['idcliente'] = $usuario['id_cliente'];
            header('Location: ../index.php'); // Redireciona para a página inicial
            exit;
        } else {
          echo "<script>alert('A senha está incorreta');</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Joyce Galvão Modas</title>
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="icon" href="../img/iconJGM.png">
  </link>
</head>

<body>
  <section class="container">

    <div class="image-section">
      <div class="image-wrapper">
        <img src="../img/roupas.jpg" alt="" id="">
      </div>

      <div class="content-container">
        <h1 class="section-heading"><img id="logImg" src="../img/LogoJGM.png" alt=""></h1>
      </div>
    </div>

    <div class="form-section">

      <div class="form-wrapper">

        <h2>Log-in</h2>
        <p>Insira suas credenciais para acessar sua conta.</p>
        <form method="post">
          <div class="input-container">
            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" type="email" id="email" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input name="senha" type="password" id="password">
            </div>
          </div>

          <button class="login-btn">Entrar</button>
        </form>
        <div class="or-divider">não possui conta?</div>
        <button class="google-signin">

          <span><a href="cadastro.php">Cadastre-se</a></span>
        </button>
        <div class="or-divider"><a href="../index.php">Voltar</div>
      </div>

    </div>

  </section>
  <script>
    function mudaImagem(){
      let imagem = document.getElementById('logImg')
      if(window.innerWidth <= 800){
        imagem.src = '../img/logoJGMsm.png'
      }else(
        imagem.src = '../img/logoJGM.png'
      )
      window.onload =mudaImagem;
      window.onresize = mudaImagem;
    }
  </script>
</body>

</html>