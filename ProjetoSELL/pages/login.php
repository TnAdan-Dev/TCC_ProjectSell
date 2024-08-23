<?php
  session_start();
  if(isset($_session['usuario'])){
    Header('location:./inicio.php');
    }

  if (count($_POST) > 0) {
    require_once "../backend/conexao.php";
    $conexao = novaConexao(); 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        $sql = "SELECT * FROM tbl_cliente WHERE cli_email = :email AND cli_senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {

            header('Location: autenticacao.php');
            $_SESSION['idcliente'] = $row['id_cliente'];
            $_SESSION['nome'] = $row['cli_nome'];
            $_SESSION['email'] = $row['cli_email'];
            $_SESSION['telefone'] = $row['cli_telefone'];
            $_SESSION['cpf'] = $row['cli_cpf'];
            exit(); 
        } else {
            echo '<script>alert("Usuário ou senha incorretos");</script>';
        }
    } catch (PDOException $e) {
        echo "Mensagem de erro: " . $e->getMessage();
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