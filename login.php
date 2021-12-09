<!DOCTYPE html>

<head>
	<script src="js/acesso.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login 3</title>
</head>

<body>
	<div class="topo">
			<spam class="fonte">Flan Enterprise</spam>
			<div class="data verde borda">
				<script>
					var data = new Date()
					var dias = data.getDay()
					var mes = data.getMonth()
					var ano = data.getFullYear()
					var meses = new Array('Janeiro', 'Fevereiro', 'Marco', 'Abril', 'Maio', 'Junho', 'Julho',
						'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
					var diaSemana = new Array(
						'Domingo', 'Segunda Feira', 'Terça Feira', 'Quarta Feira', 'Quinta Feira', 'Sexta Feira', 'Sábado');
					var hoje = data.getDate();
					var hora = data.getHours();
					var min = data.getMinutes();
					var sec = data.getSeconds();
					var strHora = hora + ':' + min + ':' + sec;
					var strData = diaSemana[dias] + ", " + hoje + " de " + meses[mes] + " de " + ano + ", " + strHora
					document.write(strData)
				</script>
			</div>
	</div>
	<main>
		<div class="centraliza">
			<div class="formulario interna ">
				<div class="text">
					<h1>Aqui você ganha em dobro!</h1>
					<h2>Compre o seu Flan online agora mesmo! Escolha entre múltiplo sabores e ainda ganhe um brinde! Frete grátis para todo o Brasil.</h2>
				</div>
				<form class="form" method='post' action='adicionar.php	'>
					<div class="titulo">
						<h1>Login</h1>
						<hr>
					</div>
					<div class="inputs">
						<label for="nome">Nome:</label>
						<input type="text" id="nome">
						<label for="senha">Senha:</label>
						<input type="password" id="senha">
						<p><a href="forgotpass.html" class="esqueceu">Esqueceu a senha?</a></p>
					</div>
					<input type="submit" name="botao" value="Enviar" class="centralizaBotao" onclick="acesso(this.form)">
				</form>
			</div>
		</div>
	</main>
	</body>

</html>