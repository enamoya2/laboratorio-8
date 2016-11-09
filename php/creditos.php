<?php session_start(); ?>

<!doctype html public>
<html>
	<head>
		<?php include('../adds/StyleAndMeta.php'); ?>
		<title> Pagina de creditos </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<div id='page-wrap'>
			<?php include('../adds/header.php'); ?>
			<?php include('../adds/navegation.php'); ?>
			<section class="main" id="s1">
					<h1>Autores</h1>
					<div id= 'autor1'>
						<h2> Iker Moya</h2>
						<p align= "center">Especialidad: Ingenieria de computadores</p>
						<img src='https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAQlAAAAJDY2ZmY4ODAxLWNhODYtNDQ5ZC05NzQ0LWY3MjRlMGZiYjU4ZA.jpg'>
					</div>
					<div id= 'autor2'>
						<h2> Jose Augusto Ena</h2>
						<p align= "center">Especialidad: Computacion</p>
						<img src='https://scontent.xx.fbcdn.net/v/t1.0-9/12715578_756959777768577_1813122112924269595_n.jpg?oh=414c1e1193fb93e5181087c560d9c820&oe=58717469' width="15%" height="25%">
					</div>
					<div>
						<button id="Mapa_Cliente" onclick="">Cliente</button>
						<button id="Mapa_Servidor" onclick="">Servidor</button>
						<div id="mapa"></div>
					</div>
			</section>
			<?php include('../adds/footer.php'); ?>
		</div>
	</body>
</html>
