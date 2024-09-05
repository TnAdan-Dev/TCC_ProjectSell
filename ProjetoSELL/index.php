<?php
session_start();
//  if(!isset($_SESSION['idcliente'])){
//    Header('location:pages/login.php');
// }
$clienteLogado = isset($_SESSION['idcliente']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Inicial</title>
  <link rel="stylesheet" href="css/output.css">
  <link rel="icon" href="img/iconJGM.png">
</head>

<body class="">
<?php 
require_once 'utils/navbar.php'; ?>
  

</body>

</html>