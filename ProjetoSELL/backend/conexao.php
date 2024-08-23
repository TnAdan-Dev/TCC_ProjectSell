<?php
function novaConexao()
{
    $dsn = 'mysql:host=br612.hostgator.com.br;dbname=hubsap45_bd_joycegalvao';
    $usuario = 'hubsap45_usrjoycegal';
    $senha = 'j0YsseG@!\/A0';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);
        return $conexao;
    } catch (PDOException $e) {
        throw new PDOException($e);
    }
} //fecha funcao

novaConexao();