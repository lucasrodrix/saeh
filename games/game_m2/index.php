  <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>S.A.E.H</title>
  <script language="JavaScript" src="pegaDados.js" type="text/javascript"></script>
  <script language="JavaScript" src="apagaForm.js" type="text/javascript"></script>
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>  
  <body>
  <table width="90%" align="center">
  <tr>
    <td width="647" rowspan="2">
    <iframe src="index1.html" width="640" height="480" scrolling="No"></iframe>
    </td>
    <td width="423" height="213" align="left" valign="middle">
      <form action="inserir.php" method="post" name="form2" onSubmit="apagar()">
        <fieldset>
          <legend>PONTUAÇÃO</legend>
          <label for="acertos">Jogo:</label>
          <input type="text" id="jogo" name="jogo" value=""><input type="button"  name="botao" value="Carregar" onClick="dados()" align="right"><br>
          <label for="acertos">Acertos:</label>
          <input type="text" id="acertos" name="acertos" value=""><input name="Submit" type="submit" value="Enviar" align="right"><br>
          <label for="erros">Erros:</label>
          <input type="text" id="erros" name="erros" value=""><br>
        </fieldset>
      </form>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">
	<a href="../../menu_math.php"><img class="volta" src="images/titulo6.png" /></a>
	</td>
  </tr>
  </table>
    
  
</body>
  </html>