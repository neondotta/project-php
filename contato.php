<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contato</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
  	<?php require_once("menu.php");?>
    <h1 class="ctltxt">Contato</h1>
	
	<div class="panel panel-default">
		<div class="centralizar">
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$nome = $_REQUEST['nome'];
					$email = $_REQUEST['email'];
					$assunto = $_REQUEST['assunto'];
					$mensagem = $_REQUEST['mensagem'];
					if(empty($nome) || empty($email) || empty($assunto) || empty($mensagem)){
						echo "<div class='alert alert-danger' role='alert'>";
						echo "Por favor, preencha todos campos!";
						echo "</div>";
					}else{
						echo "<div class='alert alert-success' role='alert'>";
						echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou!";
						echo "</div>";    
						echo	"Nome: ".$nome.
								"<br />E-mail: ".$email.
								"<br />Assunto: ".$assunto.
								"<br />Mensagem: ".$mensagem
						;
					}
				}

			?>

			<div class="panel-body">
				<form name="form-contato" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="form-group">
				    	<label for="nome">Email address</label>
				    	<!--<div class="controls">-->
				    		<input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome">
				 		<!--</div>-->
				 	</div>
				 	<div class="form-group">
				    	<label for="email">Email address</label>
				    		<input type="email" class="form-control" id="email" name="email" placeholder="seunome@provedor.com">
					</div>
					<div class="form-group">
				    	<label for="assunto">Email address</label>
				    		<input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
				 	</div>
				 	<label for="mensagem">Mensagem</label>
						<textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea><br /><br />
					<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
				</form>
			</div>
		</div>
	</div>

	<?php require_once("rodape.php");?>
	
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validacao-form.js"></script>

</body>
</html>