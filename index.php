<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="imagem/r.png" type="image/x-icon"/>
		<title>Raul Pacheco</title>
	</head>
	<body>
		<div id="corpo">
			<center>
			<?php
				include 'topo.php';
				include 'menu.php';
			?>

			<div id="conteudo">
				<?php
					@$pagina = $_GET['pagina'];
					if ($pagina == "inicio"){
						include 'inicio.php';
					}
					if ($pagina == "curriculo"){
						include 'curriculo.php';
					}
					if ($pagina == "maissobremim"){
						include 'maissobremim.php';
					}
					if ($pagina == "Envienosumamensagem"){
						include 'Envienosumamensagem.php';
					}
					if ($pagina == "experiencia"){
						include 'experiencia.php';
					}
					if ($pagina == "") {
						include "inicio.php";
					}
				?>
			</div>
			<?php
				include 'rodape.php';
			?>
		</div>
	</body>
</html>