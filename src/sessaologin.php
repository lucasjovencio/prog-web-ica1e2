<?php
@session_start();
include 'progressoindex.php';
$login = $_POST['email'];
$senha = $_POST['senha'];
$link = "cadastro.xml"; //link do arquivo xml
$cads = simplexml_load_file("cadastro.xml"); //carrega o arquivo XML e retornando um Array

foreach($cads->usuario as $cad){
    $emailXML 	= $cad->email;
    $senhaXML 	= $cad->senha;
    $nomeuser 	= $cad->nomeusuario;
    $nome 	= $cad->nome;
    if(strcmp($emailXML,$login) == 0 && strcmp($senhaXML,$senha) == 0){
            $_SESSION['nome']       = (string)$nome;
            $_SESSION['nomeuser']   = (string)$nomeuser;
            $_SESSION['login']      = (string)$login;
            $_SESSION['senha']      = (string)$senha;
            $dados = new Progresso();
            $dados->acessoPlus();
            $_SESSION['qtnAc']   =   $dados->getQtnAc();
            $_SESSION['AtnUs']   =   $dados->getQtnUs();
            $_SESSION['QtnM']    =   $dados->getQtnM();
            $_SESSION['QtnH']    =   $dados->getQtnH();
            unset($dados);
            header('location:dashboard/admin/index.php');
            die();
    }
}
?>