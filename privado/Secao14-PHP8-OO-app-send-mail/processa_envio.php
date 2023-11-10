<?php
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    require "bibliotecas_externas/PHPMailer-6.7.1/Exception.php";
    require "bibliotecas_externas/PHPMailer-6.7.1/OAuthTokenProvider.php";
    require "bibliotecas_externas/PHPMailer-6.7.1/OAuth.php";
    require "bibliotecas_externas/PHPMailer-6.7.1/PHPMailer.php";
    require "bibliotecas_externas/PHPMailer-6.7.1/POP3.php";
    require "bibliotecas_externas/PHPMailer-6.7.1/SMTP.php";

    // require "bibliotecas_externas/PHPMailer/Exception.php";
    // require "bibliotecas_externas/PHPMailer/OAuth.php";
    // require "bibliotecas_externas/PHPMailer/PHPMailer.php";
    // require "bibliotecas_externas/PHPMailer/POP3.php";
    // require "bibliotecas_externas/PHPMailer/SMTP.php";

    // Trazendo o recurso do namespace da biblioteca para o contexto da aplicação
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class Mensagem{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;
        public $status = array('codigo_status'=>null, 'descricao_status'=>'');

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function mensagemValida(){
            if(empty($this->para)||empty($this->assunto)||empty($this->mensagem)){
                return false;
            }

            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem -> __set('para', $_POST['para']);
    $mensagem -> __set('assunto', $_POST['assunto']);
    $mensagem -> __set('mensagem', $_POST['mensagem']);
    
    // echo '<pre>';
    // print_r($mensagem);
    // echo '</pre>';

    if(!$mensagem->mensagemValida()){
        echo "Mensagem NÃO é valida.";
        header('Location: index.php?msg=erro_preenchimento');
    }

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'luiztestedeaplicacao@gmail.com';                     //SMTP username
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;//TLS            //Enable implicit TLS encryption
        $mail->Port       = 587;//TLS                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        // $mail->Port       = 465; 

        //Recipients
        $mail->setFrom('luiztestedeaplicacao@gmail.com', 'Teste de Aplicacao Remetente');
        $mail->addAddress($mensagem->__get('para'));     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $mensagem->__get('assunto');//Assunto
        $mail->Body    = $mensagem->__get('mensagem');//Conteudo com leituras de tags html
        //$mail->AltBody = $mensagem->__get('mensagem');//Conteudo alternativo -> Sem leituras de tags html

        $mail->send();

        $mensagem->status['codigo_status'] = 1;
        $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';
    } catch (Exception $e) {
        $mensagem->status['codigo_status'] = 2;
        $mensagem->status['descricao_status'] = 'Não foi possivel enviar este e-mail. Por favor tente mais tarde. Datalhes do erro: '. $mail->ErrorInfo;
    }
?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>App Mail Send</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
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
						<div class="col col-md-8">
				            <div class="py-3 text-center">
                            
                                <?php if($mensagem->status['codigo_status'] == 1){  ?>
                                    <h1 class="display-4 text-success">Sucesso</h1>
                                    <p class="lead fs-4"><?= $mensagem->status['descricao_status'] ?></p>      
                                    <a class="btn btn-success btn-lg  mt-3 text-white" href="index.php">Voltar</a>                          
                                <?php }else if($mensagem->status['codigo_status'] == 2){?>
                                    <h1 class="display-4 text-danger">Ops!</h1>
                                    <p class="lead fs-4"><?= $mensagem->status['descricao_status'] ?></p>      
                                    <a class="btn btn-danger btn-lg  mt-3 text-white" href="index.php">Voltar</a> 
                                <?php } ?>
                            </div>
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