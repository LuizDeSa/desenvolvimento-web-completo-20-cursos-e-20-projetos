<html>
	<head>
		<meta charset="utf-8" />
		<title>App Mail Send</title>
		<link rel="stylesheet" href="../../css/bootstrap5/css/bootstrap.css">
	</head>
	<body>
		<header class="mb-3">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark px-3">
                <div class="container">

                    <a class="navbar-brand" href="index.php">
                        <img src="logo.png" alt="" width="30">
                        Send Mail
                    </a>
                    
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Quem Somos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
		<section>
			<div class="container">

				<div class="py-3 text-center">
					<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
					<h2>Send Mail</h2>
					<p class="lead">Seu app de envio de e-mails particular!</p>
				</div>

				<div class="row">
					<div class="d-flex justify-content-center">
						<div class="col col-lg-8">
							<form action="processa_envio.php" method="post">
								<div class="mb-3">
									<label for="para" class="form-label fw-bold">Para</label>
									<input id="para" name="para" type="text" class="form-control border-2" placeholder="joao@dominio.com.br">
								</div>

								<div class="mb-3">
									<label for="assunto" class="form-label fw-bold">Assunto</label>
									<input id="assunto" name="assunto" type="text" class="form-control border-2" placeholder="Assundo do e-mail">
								</div>

								<div class="mb-3">
									<label for="mensagem" class="form-label fw-bold">Mensagem</label>
									<textarea id="mensagem" name="mensagem" class="form-control border-2" placeholder="Mensagem" rows="3"></textarea>
								</div>

								<?php if(isset($_GET['msg']) && $_GET['msg']=='erro_preenchimento'){ ?>

									<div class="alert alert-danger" role="alert">
										Por favor, preencha todos os campos.
									</div>

								<?php } ?>

								<div class="d-flex justify-content-center">
									<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</section>

		<footer class="py-2 bg-dark fixed-bottom">
            <div class="container">
                <div class="row text-white">
                    <div class="d-flex justify-content-center fs-6">
                        &copy 2017–2023
                    </div>
                </div>
            </div>
        </footer>
	</body>
</html>