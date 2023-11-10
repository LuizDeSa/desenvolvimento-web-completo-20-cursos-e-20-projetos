<html>
	<head>
		<title>Página Inicial</title>
		<link rel="stylesheet" href="css/style.css">
		<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
		<link rel="stylesheet" href="../css/style-comentarios.css">
		<link rel="stylesheet" href="../css/bootstrap5/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<h1>Página Inicial</h1>
			
			<h2>Aulas</h2>

			<div style="width:400px">
				<ul class="list-group">
					<li class="list-group-item"><a href="aulas/echo-print.php">Echo-Print</a></li>
					<li class="list-group-item"><a href="aulas/comentarios.php">Comentarios</a></li>
					<li class="list-group-item"><a href="aulas/variaveis.php">Variáveis</a></li>
					<li class="list-group-item"><a href="aulas/concatenacao.php">Concatenação</a></li>
					<li class="list-group-item"><a href="aulas/constantes.php">Constantes</a></li>
					<li class="list-group-item"><a href="aulas/if-else.php">If - Else</a></li>
					<li class="list-group-item"><a href="aulas/if-else-operadores-logicos.php">If - Else: Operadores Lógicos</a></li>
					<li class="list-group-item"><a href="aulas/if-else-praticando-mais.php">If - Else: Praticando mais</a></li>
					<li class="list-group-item"><a href="aulas/operador-ternario.php">Operador Ternario</a></li>
					<li class="list-group-item"><a href="aulas/atividade-01.php">Atividade 01</a></li>
					<li class="list-group-item"><a href="aulas/switch.php">Switch</a></li>
					<li class="list-group-item"><a href="aulas/casting.php">Casting</a></li>
					<li class="list-group-item"><a href="aulas/operadores_aritmeticos.php">Operadores artméticos</a></li>
					<li class="list-group-item"><a href="aulas/operadores_atribuicao_aritmeticos.php">Operadores atribuição artméticos</a></li>
					<li class="list-group-item"><a href="aulas/operadores_incremento_decremento.php">Operadores Incremento Decremento</a></li>
					<li class="list-group-item"><a href="aulas/funcoes.php">Funções</a></li>
					<li class="list-group-item"><a href="aulas/atividade-02.php">Atividade 02</a></li>
					<li class="list-group-item"><a href="aulas/funcoes-nativa-string.php">Funções String Nativas</a></li>
					<li class="list-group-item"><a href="aulas/funcoes-nativa-matematica.php">Funções Matématicas Nativas</a></li>
					<li class="list-group-item"><a href="aulas/funcoes-nativa-data.php">Funções String Data</a></li>
					<li class="list-group-item"><a href="aulas/array.php">Array</a></li>
					<li class="list-group-item"><a href="aulas/array-mult.php">Array Mult</a></li>
					<li class="list-group-item"><a href="aulas/array-pesquisa.php">Array Pesquisa</a></li>
					<li class="list-group-item"><a href="aulas/false-nul-empty.php">False Null Empty</a></li>
					<li class="list-group-item"><a href="aulas/array-funcoes-nativas.php">Array Funções Nativas</a></li>
					<li class="list-group-item"><a href="aulas/loops-while.php">Loops While</a></li>
					<li class="list-group-item"><a href="aulas/loops-do-while.php">Loops Do While</a></li>
					<li class="list-group-item"><a href="aulas/loops-for.php">Loops For</a></li>
					<li class="list-group-item"><a href="aulas/loops-pratica1.php">Loops Pratica 01</a></li>
					<li class="list-group-item"><a href="aulas/loops-foreach.php">Loops Foreach</a></li>
					<li class="list-group-item"><a href="aulas/loops-pratica2.php">Loops Pratica 02</a></li>
					<li class="list-group-item"><a href="aulas/atividade-03.php">Atividade 03</a></li>
					<li class="list-group-item"><a href="aulas/incorporando_scripts">Incorporando Scripts</a></li>
					<li class="list-group-item"><a href="app-help-desk">App help desk</a></li>
				</ul>
			</div>

			<div class="comentario">
				<ol>
					<li>
						Primeiramente é necessario copiar o aqrquivo <span class="arquivo">000-default.conf</span> presente na pasta <span class="caminho">/etc/apache2/sites-available</span>  
					</li>
					<li>
						Após é necessario comentar a linha <span class="configuracao">DocumentRoot /var/www/html</span>	e inserir a linha que contem o caminho para a pasta de interesse, por exemplo,  <span class="configuracao">DocumentRoot /home/luiz/Documentos/Desenvolvimento/Udemy/Desenvolvimento-Web-Completo-20-cursos-20-projetos/</span>
					</li>
					<li>
						Após, no mesmo arquivo, podemos alterar a porta 80 para 8080 e salvar
					</li>
					<li>
						Após é necessario executar o seguinte comando para ativar o site: <span class="comando">sudo a2ensite nome_arquivo.conf </span>
					</li>
					<li>
						Após é necessário editar o arquivo <span class="arquivo">apache2.conf</span> presente em <span class="caminho">/etc/apache2/</span>, copiando a diretiva <span class="configuracao">< Directory /var/www/></span> alterando o caminho para o pasta desejada, nesse caso <span class="configuracao">DocumentRoot /home/luiz/Documentos/Desenvolvimento/Udemy/Desenvolvimento-Web-Completo-20-cursos-20-projetos/</span>
					</li>
					<li>
						Agora é so executar o segunte comando:  <span class="comando"> sudo service apache2 restart</span>
					</li>

					<li>Após é necessario altorizar a porta 8080 no arquivo <span class="arquivo"> /etc/apache2/ports.conf</span></li>

					<li>
						Apoś é necessario executar o seguinte comando na pasta de usuário desejada: <span class="comando">chmod 755 home/luiz/</span>
					</li>


					<li>Para acessar o site, pasta digitar no navegador <span class="comando">http://localhost:8080/</span></li>
				</ol>
			</div>
		</div>
	</body>
</html>