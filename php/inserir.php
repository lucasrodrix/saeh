<?php
   
   /* Chama os arquivos de conex�o ao BD */   
   include_once ("conexao.php"); 

	//Abaixo atribu�mos os valores provenientes do formul�rio pelo m�todo POST
	$nome = $_POST["nome"];
	$nasc = $_POST["datanasc"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	
	
	$string_sql = "INSERT INTO aluno (id,nome,datanasc,login, senha) VALUES (null,'$nome','$nasc','$login','$senha')"; //String com consulta SQL da inser��o
	
	mysql_query($string_sql,$conexao); //Realiza a consulta
	
	if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
		echo "<script type='text/javascript'> alert('Cadastro feito com sucesso');</script>";
	} else {
		echo "Erro, n�o poss�vel inserir no banco de dados";
	}
	
	mysql_close($conexao); //fecha conex�o com banco de dados 
?>