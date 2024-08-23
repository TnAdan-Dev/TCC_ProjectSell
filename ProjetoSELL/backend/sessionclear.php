<?php 
    session_start();

    session_destroy(); //fç que destroi a sessão

    //header: direciona para a pagina sessao.php
    header('Location: ../index.php');
