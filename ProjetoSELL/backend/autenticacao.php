<?php 
     session_start();
     echo ($_SESSION['idcliente'] . "<br>");
     echo ($_SESSION['nome']. "<br>");
     echo ($_SESSION['cpf']. "<br>");
     echo ($_SESSION['telefone']. "<br>");
     echo ($_SESSION['email']. "<br>");
header('../index.php');

