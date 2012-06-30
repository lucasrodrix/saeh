<?php

/*
 * faz a conexao ao banco
 * e seleciona a base de dados
 */
$conexao = mysql_connect("127.0.0.1", "root", "")
or die ("Erro na conexуo ao banco de dados.");
$db = mysql_select_db("saeh")
or die ("Erro ao selecionar a base de dados.");

/*
 * monta query em SQL para insercao
 */
$sql = "INSERT INTO pontuacao (
	jogo,
	acerto,
	erro
	) VALUES (
	'".mysql_real_escape_string($_POST['jogo'])."',
	'".mysql_real_escape_string($_POST['acertos'])."',
	'".mysql_real_escape_string($_POST['erros'])."'
	)";

/*
 * executa a query
 */
$sql = mysql_query($sql)
or die ("Houve erro na gravaчуo dos dados.");
?>