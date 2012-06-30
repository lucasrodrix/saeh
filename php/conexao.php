<?php
/* Arquivo de conexão com o banco de dados */

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "saeh";

$conexao = mysql_connect($servidor,$usuario,$senha) ;

$db = mysql_select_db($banco,$conexao) or die("Erro ao conectar ao bando de dados");
?>