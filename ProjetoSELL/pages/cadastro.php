<?php
session_start();
if (isset($_SESSION['idcliente'])) {
  header('Location: ../index.php'); 
  exit;
} 
include '../backend/conexao.php';

// Função para formatar CPF
function formatarCPF($cpf) {
    $cpf = preg_replace("/[^0-9]/", "", $cpf); // Remove qualquer caractere que não seja número
    return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
}

// Função para formatar Telefone
function formatarTelefone($telefone) {
    $telefone = preg_replace("/[^0-9]/", "", $telefone); // Remove qualquer caractere que não seja número
    return '(' . substr($telefone, 0, 2) . ')' . substr($telefone, 2, 5) . '-' . substr($telefone, 7);
}

if (count($_POST) > 0) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = formatarCPF($_POST['cpf']);
    $telefone = formatarTelefone($_POST['telefone']);
    $datanasc = $_POST['datanasc']; // Formato esperado: aaaa-mm-dd
    $senha = $_POST['senha'];
    $passwordconfirm = $_POST['passwordconfirm'];
    $data_cadastro = date('Y-m-d'); // Data atual no formato aaaa-mm-dd

    $conexao = novaConexao();

    // Verifica se o e-mail ou CPF já existem
    $stmt = $conexao->prepare("SELECT * FROM tbl_cliente WHERE cli_email = ? OR cli_cpf = ?");
    $stmt->execute([$email, $cpf]);
    if ($stmt->rowCount() > 0) {
      echo "<script>alert('Email ou CPF ja cadastrados'); window.location.href='cadastro.php';</script>";
    } elseif ($senha !== $passwordconfirm) {
      echo "<script>alert('As senhas não coincidem'); window.location.href='cadastro.php';</script>";
    } else {
        // Insere os dados no banco
        $stmt = $conexao->prepare("INSERT INTO tbl_cliente (cli_nome, cli_email, cli_cpf, cli_telefone, cli_dt_cadastro, cli_dt_nascimento, cli_senha) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $cpf, $telefone, $data_cadastro, $datanasc, $senha]);
        $_SESSION['idcliente'] = $conexao->lastInsertId(); 
        echo "<script>alert('Usuario cadastrado!'); window.location.href='../index.php';</script>";

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

        <h2>Cadastro</h2>  
        <form method="post">
          <div class="input-container">
          <div class="form-group">
              <label for="nome">Nome</label>
              <input required name="nome" type="text" id="nome" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input required name="email" type="email" id="email" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input required name="cpf" type="text" id="cpf" autocomplete="off" maxlength="11">
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input required name="telefone" type="tel" id="telefone" autocomplete="off" maxlength="11">
            </div>
            <div class="form-group">
              <label for="datanasc">Data de nascimento</label>
              <input required name="datanasc" type="date" id="datanasc" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input required name="senha" type="password" id="password" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="passwordconfirm">Confirme sua senha</label>
              <input required name="passwordconfirm" type="password" id="passwordconfirm">
            </div>
          </div>

          <button class="login-btn">Cadastrar-se</button>
        </form>
        <div class="or-divider">Ja possui conta?</div>
        <button class="google-signin">

          <span><a href="login.php">Log-in</a></span>
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