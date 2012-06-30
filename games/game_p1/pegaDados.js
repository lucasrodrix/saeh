		function dados()
		{
		var game = localStorage.getItem('jogo');
		var acerto = localStorage.getItem('acertos');
		var erro = localStorage.getItem('erros');
		document.form2.jogo.value = game
		document.form2.acertos.value = acerto
		document.form2.erros.value = erro
		}