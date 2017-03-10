<html>
 <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">

<head>
	<title>Extrator de Entidades Nomeadas no Twitter</title>
	<link rel="stylesheet" type="text/css" href="TwitterNerMain.css"/>
</head>

<body>

<div id = "inteiro">
	
	 <div id = "topo">
		<h1> <a href = "localhost" title="logo"><img src ="bird.png" alt =""/> </a></h1>

	<div id = "menu">
		<ul>
			<li><a href="TwitterNerMain.html" title="Pagina inicial">Home</a></li>
			<li><a href="seleciona.html" title="Novo por aqui? Cadastre-se!">Cadastro</a></li>
			<li><a href="login.html" title="Entre aqui">Login</a></li>
			<li><a href="sobre.html" title="Conheca a equipe">Quem Somos</a></li>
			<li><a href="contato.html" title="Entre em contato">Contato</a></li>
		</ul>	
	</div>	
	</div>
<hr />
	
	<div id="inspiracao">
		<img src="twitterbg.jpg" alt="Comece sua ideia"/>
		<h2>Extrator de Entidades Nomeadas</h2>
		<p>O problema de identifica��o de entidades nomeadas (Named Entity Recognition - NER) consiste em encontrar palavras que ocorrem em
         um documento ou trecho de texto n�o estruturado e que fa�am refer�ncia a entidades do mundo real. Este problema tem sido estudado
         em v�rios contextos como identifica��o de nomes de pessoas, companhias e produtos em not�cias, identifica��o de genes e prote�nas
         em publica��es biom�dicas </p>
        <p>Neste projeto, enfocamos o problema de identifica��o de entidades nomeadas em mensagens curtas veiculadas atrav�s de redes sociais
         on-line como Twitter, Facebook, Linkedin, etc. A extra��o de informa��es contidas no corpus textual de redes sociais pode ajudar a
         responder de forma autom�tica e efetiva quest�es como: Quem fala com quem sobre que assunto? Quem s�o os atores principais nas redes?
          Onde est�o localizados? Que assuntos e t�picos emergem, se disseminam e desaparecem nos eco-sistemas sociais digitais? Que indiv�duos
          e grupos promovem e suprimem estes assuntos e t�picos?  </p>

	</div>


<hr />
	<div id="conteudo">
		<h3>Por que extrair entidades?</h3>
		
		<p> As redes sociais online s�o atualmente importantes plataformas para produ��o, processamento e fluxo de informa��o. Tal informa��o
        pode se originar dentro das redes ou fora delas e pode ser utilizada como fonte prim�ria ou complementar para derivar conhecimento sobre a pr�pria rede, seus membros, seus temas, suas comunidades. </p>


		<h3>Por que no Twitter?</h3>
		
		<p>esta informa��o quase sempre ocorre em um formato textual, n�o estruturado, em linguagem natural e at� mesmo em estilo telegr�fico
        ou informalmente codificado. Isso � um grande empecilho para que esta informa��o possa ser processada de maneira autom�tica e para que dela se possa derivar conhecimento latente..</p>
	</div>

<hr />
	<div id="login">
		<h2>Busca</h2>
		<h3>Palavra-chave</h3>
		<form method="POST" action="tweet.php">
			<table>
			<tr>	
			<fieldset>
				<td><label>Palavra-chave: </td><td><input type="text" name= "busca"/></label></td>
				</tr>
				<tr>

				</tr>
				<tr>
				<td><input type = "submit" value = "OK"></td>
			</tr>
			</fieldset></form>
		</table>
		<br>  <br><br><br><br>  <br>
		<h3></h3>
	</div>
 
<hr />
	<div id="rodape">
		<address>
			<strong>3305-1480</strong>
			Endereço: Av. General Rodrigo, Octávio, 6200, Coroado I, Cep: 69077-000

		</address>

	</div>


</div>
</body>
</html>
