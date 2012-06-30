<?php
   
   /* Chama os arquivos de conexão ao BD */   
   include_once ("conexao.php"); 

	//Abaixo atribuímos os valores provenientes do formulário pelo método POST
	$nome = $_POST["nome"];
	$nasc = $_POST["datanasc"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	
	
	$string_sql = "INSERT INTO aluno (id,nome,datanasc,login, senha) VALUES (null,'$nome','$nasc','$login','$senha')"; //String com consulta SQL da inserção
	
	mysql_query($string_sql,$conexao); //Realiza a consulta
	
	if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
		echo "<script type='text/javascript'> alert('Cadastro feito com sucesso');</script>";
	} else {
		echo "Erro, não possível inserir no banco de dados";
	}
	
	mysql_close($conexao); //fecha conexão com banco de dados 
?>