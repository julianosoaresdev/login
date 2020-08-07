<?php
include("config.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} UTC/GMT");
header("Last-Modified: {$gmtDate} UTC/GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Content-Type: text/html;  charset=utf-8",true);

//INSTANCIAS
$Login = new CR\Login\Login;
$Helper = new CR\Helper\Helper;

if(isset($_GET["acao"]))
{
	$acao = $Helper->limpaCampo( $_GET["acao"] );
}
if(isset($_POST["acao"]))
{
	$acao = $Helper->limpaCampo( $_POST["acao"] );
}


switch($acao)
{
    case 'LOGAR':
        $login = $Helper->limpaCampo( $_POST["login"] );
        $pw = $Helper->limpaCampo( $_POST["senha"] );
        echo $Login->logar($login, $pw);
        break;
}
?>