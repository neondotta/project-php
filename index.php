<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto-Code</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php require_once("menu.php");?>

	<div class="panel panel-default">
  
		<div class="panel-heading ctltxt"><h4><strong>Links estudo</strong></h4></div>
	   	<table class="table table-condensed ctl98">
    		<tr>
    			<td><strong>Nome</strong></td>
    			<td><strong>Link</strong></td>
    			<td><strong>OBS</strong></td>
    		</tr>
    		<tr>
    			<td>Code Education</td>
    			<td><a href="http://portal.code.education/" target="_blank">Portal</a></td>
    			<td>Videos para estudo</td>
    		</tr>
    		<tr>
    			<td>GitHub</td>
	    		<td>
		    		<div class="btn-group dropup">
						<button type="button" class="btn btn-default"><a href="https://github.com/" target="_blank">Página Inicial</a></button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">
								<a href="https://github.com/" target="_blank">Página Inicial</a>
							</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="https://github.com/settings/ssh" target="_blank">SSH Keys</a></li>
							<li><a href="https://windows.github.com/" target="_blank">GIT para Windows</a></li>
							<li><a href="https://mac.github.com/" target="_blank">GIT para MAC</a></li>
							<li><a href="https://git-scm.com/downloads" target="_blank">GIT Download</a></li>
						</ul>
					</div>
				</td>
    			<td>SSH Keys - Downloads</td>
    		</tr>
    		<tr>
    			<td>Bootstrap</td>
	    		<td>
		    		<div class="btn-group dropup">
						<button type="button" class="btn btn-default"><a href="http://getbootstrap.com/" target="_blank">Página Inicial</a></button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">
								<a href="http://getbootstrap.com/" target="_blank">Página Inicial</a>
							</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="http://getbootstrap.com/css/" target="_blank">Documentação CSS</a></li>
							<li><a href="http://getbootstrap.com/components/" target="_blank">Documentação Components</a></li>
							<li><a href="http://getbootstrap.com/javascript/" target="_blank">Documentação JS</a></li>
						</ul>
					</div>
				</td>
    			<td>Site Bootstrap - Documentações [FrameWork - HTML, CSS e JS]</td>
    		</tr>
			<tr>
				<td>PHP</td>
	    		<td>
		    		<div class="btn-group dropup">
						<button type="button" class="btn btn-default"><a href="http://php.net/" target="_blank">Página Inicial</a></button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">
								<a href="http://php.net/">Página Inicial</a>
							</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="http://php.net/downloads.php" target="_blank">Download</a></li>
							<li><a href="http://php.net/docs.php" target="_blank">Documentation</a></li>
							<li><a href="http://php.net/manual/pt_BR/" target="_blank">Documentação</a></li>
						</ul>
					</div>
				</td>
				<td>Site PHP - Documentação EN e BR - Download</td>
			</tr>
			<tr>
				<td>MySQL</td>
	    		<td>
		    		<div class="btn-group dropup">
						<button type="button" class="btn btn-default"><a href="https://www.mysql.com/" target="_blank">Página Inicial</a></button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">
								<a href="https://www.mysql.com/">Página Inicial</a>
							</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="http://dev.mysql.com/downloads/windows/" target="_blank">Download</a></li>
							<li><a href="http://dev.mysql.com/doc/refman/5.7/en/index.html" target="_blank">Documentation</a></li>
						</ul>
					</div>
				</td>
				<td>Site MySQL - Documentação EN - Download</td>
			</tr>
		</table>
	</div>

	<?php require_once("rodape.php");?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>