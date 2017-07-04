<?php 
@session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
    unset($_SESSION);
    header('location:/progweb/src/index.html');
}

$logado = $_SESSION['login'];
$nome   = $_SESSION['nome'];
$qtnAc  = $_SESSION['qtnAc'];
$qtnUs  = $_SESSION['AtnUs'];
$qtnM   = $_SESSION['QtnM'];
$qtnH   = $_SESSION['QtnH'];
?>